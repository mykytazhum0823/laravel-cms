<?php

namespace Vanguard\Http\Controllers\Web;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Vanguard\Events\Settings\Updated as SettingsUpdated;
use Illuminate\Http\Request;
use Setting;
use Vanguard\Http\Controllers\Controller;
use Vanguard\Repositories\User\UserRepository;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Vanguard\Services\Upload\UserAvatarManager;
use Vanguard\Rules\CheckIfFavicon;
/**
 * Class SettingsController
 * @package Vanguard\Http\Controllers
 */
class SettingsController extends Controller
{
    private $users;
    private $imagetab;
    private $colortab;

    public function __construct(UserRepository $user)
    {
        $this->middleware('auth');
        $this->users = $user;
        $this->imagetab = 'v-pills-logo';
        $this->colortab = 'v-pills-header';
    }

    /**
     * Display general settings page.
     *
     * @return Factory|View
     */
    public function general()
    {
        return view('settings.general');
    }

    /**
     * Display Authentication & Registration settings page.
     *
     * @return Factory|View
     */
    public function auth()
    {
        return view('settings.auth');
    }

    /**
     * Handle application settings update.
     *
     * @param Request $request
     * @return mixed
     */
    public function update(Request $request)
    {
        $this->updatesetting($request->except("_token"));
        if( isset($request->auth_tab))
        {
            $request->session()->flash('success', __('Settings updated successfully.'));
        
            return view('settings.auth', ['auth_tab'=> $request->auth_tab]);
        }
        
        return back()->withSuccess(__('Settings updated successfully.'));
    }

    /**
     * Update settings and fire appropriate event.
     *
     * @param $input
     */
    private function updatesetting($input)
    {
        foreach ($input as $key => $value) {
            Setting::set($key, $value);
        }

        Setting::save();

        event(new SettingsUpdated);
    }

    /**
     * Enable system 2FA.
     *
     * @return mixed
     */
    public function enableTwoFactor()
    {
        $this->updatesetting(['2fa.enabled' => true]);
        $request->session()->flash('success', __('Two-Factor Authentication enabled successfully.'));

        return view('settings.auth', ['auth_tab'=> $request->auth_tab]);
    }

    /**
     * Disable system 2FA.
     *
     * @return mixed
     */
    public function disableTwoFactor()
    {
        $this->updatesetting(['2fa.enabled' => false]);
        $request->session()->flash('success', __('Two-Factor Authentication disabled successfully.'));

        return view('settings.auth', ['auth_tab' => $request->auth_tab]);
    }

    /**
     * Enable registration captcha.
     *
     * @return mixed
     */
    public function enableCaptcha()
    {
        $this->updatesetting(['registration.captcha.enabled' => true]);

        return back()->withSuccess(__('reCAPTCHA enabled successfully.'));
    }

    /**
     * Disable registration captcha.
     *
     * @return mixed
     */
    public function disableCaptcha()
    {
        $this->updatesetting(['registration.captcha.enabled' => false]);

        return back()->withSuccess(__('reCAPTCHA disabled successfully.'));
    }

    /**
     * Display notification settings page.
     *
     * @return Factory|View
     */
    public function notifications()
    {
        return view('settings.notifications');
    }

    /**
     * Logo Update
     */
    public function logoUpdate(Request $request){

        $request->validate(['logo' => 'image']);
        if($request->logo != null){
    
            $imageName = 'logo.'.$request->logo->extension(); 
        
            $request->logo->move(public_path('assets/img/'), $imageName);
            
            Setting::set('logo', 'assets/img/'.$imageName);
        }
        Setting::set('logotext', $request->logotext);
        Setting::save();
        event(new SettingsUpdated);
        $this->imagetab = $request->logo_tab;
        $request->session()->flash('success', __('Logo Info updated successfully.'));

        return view('settings.general', ['imagetab' => $this->imagetab,'hash' => $this->colortab ]);
    }

    public function logoDelete(Request $request){
        Setting::set('logo', '');
        Setting::save();
        event(new SettingsUpdated);

        return back()
            ->withSuccess(__('Delete logo image successfully'));
    }
    /**
     * Favicon update
     */
    public function faviconUpdate(Request $request)
    {
        $request->validate(['favicon' => [new CheckIfFavicon]]);
    
        $imageName = 'favicon.'.$request->favicon->extension(); 
     
        $request->favicon->move(public_path('assets/img/'), $imageName);
        
        /* Store $imageName name in DATABASE from HERE */
        Setting::set('favicon', 'assets/img/'.$imageName);
        Setting::save();
        event(new SettingsUpdated);
        $this->imagetab = $request->favicon_tab;

        return view('settings.general', ['imagetab' => $this->imagetab,'hash' => $this->colortab ]);
    
    }

    public function faviconDelete(Request $request){
        Setting::set('favicon', '');
        Setting::save();
        event(new SettingsUpdated);

        return back()
            ->withSuccess(__('Delete favicon successfully'));
    }
    /**
    * Update Reviews
    */
    public function reviews()
    {
        return view('settings.reviews');
    }
    
    public function reviewsCreate()
    {
        return view('settings.reviewedit');
    }
    
    public function reviewsStore(Request $request, UserAvatarManager $avatarManager){
        $slide = 'slide';
        $job = $request->job;
        $review = $request->review;

        $review_cnt = (Setting::get('slide_cnt'))? Setting::get('slide_cnt'):0;
        if(isset($request->id)){
            $id = $request->id;
        }
        else{
            $review_cnt += 1;
            $id = $review_cnt;
        }
        $request->validate(['review_avatar' => 'image']);
        if($request->file('review_avatar') == null)
            $imageName = "";
        else
            $imageName = $avatarManager->uploadAndCropAvatar(
                $request->file('review_avatar'),
                $request->get('points')
            );
        $imagePath =($imageName == "")? $imageName : url('upload/users').'/'.$imageName;
        Setting::set($slide.'.'.$id.'.'.'fullname', $request->fullname);
        Setting::set($slide.'.'.$id.'.'.'avatar', $imagePath);
        Setting::set($slide.'.'.$id.'.'.'job', $job);
        Setting::set($slide.'.'.$id.'.'.'review', $review);
        Setting::set($slide.'.'.$id.'.'.'id', $review_cnt);
        Setting::set('slide_cnt', $review_cnt);
        Setting::save();
        event(new SettingsUpdated);

        return view('settings.reviews')
            ->withSuccess(__('Add review successfully'));
    }
    public function reviewsEdit(Request $request){
        $data = array('id' => $request->id);
        $data['job'] =  $request->job;
        $data['review'] =  $request->review;
        $data['avatar'] = $request->avatar;
        $data['fullname'] = $request->fullname;

        return view('settings.reviewedit', compact('data'));
    }
    public function reviewsDelete(Request $request){
        $id = $request->id;
        $slide = 'slide';
        Setting::forget($slide.'.'.$id);
        Setting::save();
        event(new SettingsUpdated);
        return view('settings.reviews')
            ->withSuccess(__('Delete review successfully'));
    }

    /**
     * Setup SMTP Setting
     */
    public function smtpIndex()
    {
        return view('settings.smtp');
    }
    public function smtpUpdate(Request $request){ 

        Setting::set('smtp.fromname', $request->mail_fromname);
        Setting::set('smtp.fromaddress', $request->mail_fromaddress);
        Setting::set('smtp.host', $request->mail_host);
        Setting::set('smtp.port', $request->mail_port);
        Setting::set('smtp.username', $request->mail_username);
        Setting::set('smtp.password', $request->mail_password);
        Setting::set('smtp.encryption', $request->mail_encryption);

        $keys = ['MAIL_FROM_NAME', 'MAIL_FROM_ADDRESS', 'MAIL_HOST', 'MAIL_PORT', 'MAIL_USERNAME'
                    ,'MAIL_PASSWORD', 'MAIL_ENCRYPTION'];
        $values = [$request->mail_fromname, $request->mail_fromaddress, $request->mail_host,
                        $request->mail_port,$request->mail_username, $request->mail_password,$request->mail_encryption  ];
        $path = base_path('.env');


        if (file_exists($path)) {
            for($i = 0; $i< count($keys); $i++)
            {
                $val = env($keys[$i]);
                Log::debug($val);
                if(env($keys[$i]) == null)
                {
                    $val = 'null';
                }
                file_put_contents($path, str_replace(
                    $keys[$i] . '=' . $val, $keys[$i] . '=' . $values[$i], file_get_contents($path)
                ));
            }
        }

        Setting::save();
        event(new SettingsUpdated);

        return back()
            ->withSuccess(__('Change SMTP setting successfully'));
    }

    /**
     * Change color
     */

    public function mainColorUpdate(Request $request)
    {
        //header
        Setting::set('color.header.bright.background.main', $request->bright_header_background_main );
        Setting::set('color.header.bright.background.border', $request->bright_header_background_border );
        Setting::set('color.header.bright.submenu.main', $request->bright_header_submenu_main  );
        Setting::set('color.header.bright.submenu.border', $request->bright_header_submenu_border );
        // Setting::set('color.header.bright.submenu.hover', $request->bright_header_submenu_hover );
        // Setting::set('color.header.bright.submenu.link', $request->bright_header_submenu_link );
        Setting::set('color.header.bright.text.main', $request->bright_header_text_main    );
        Setting::set('color.header.bright.text.border', $request->bright_header_text_border );
        // Setting::set('color.header.bright.text.hover', $request->bright_header_text_hover  );
        // Setting::set('color.header.bright.text.link', $request->bright_header_text_link   );
        Setting::set('color.header.bright.link.main', $request->bright_header_link_main );
        Setting::set('color.header.bright.link.hover', $request->bright_header_link_hover );

        Setting::set('color.header.dark.background.main', $request->dark_header_background_main);
        Setting::set('color.header.dark.background.border', $request->dark_header_background_border );
        Setting::set('color.header.dark.submenu.main', $request->dark_header_submenu_main  );
        Setting::set('color.header.dark.submenu.border', $request->dark_header_submenu_border );
        // Setting::set('color.header.dark.submenu.hover', $request->dark_header_submenu_hover );
        // Setting::set('color.header.dark.submenu.link', $request->dark_header_submenu_link );
        Setting::set('color.header.dark.text.main', $request->dark_header_text_main    );
        Setting::set('color.header.dark.text.border', $request->dark_header_text_border );
        // Setting::set('color.header.dark.text.hover', $request->dark_header_text_hover  );
        // Setting::set('color.header.dark.text.link', $request->dark_header_text_link   );
        Setting::set('color.header.dark.link.main', $request->dark_header_link_main );
        Setting::set('color.header.dark.link.hover', $request->dark_header_link_hover );

        Setting::set('color.sidebar.bright.background.main', $request->bright_sidebar_background_main  );
        Setting::set('color.sidebar.bright.background.border', $request->bright_sidebar_background_border  );
        Setting::set('color.sidebar.bright.menuitem.main', $request->bright_sidebar_menuitem_main  );
        Setting::set('color.sidebar.bright.menuitem.hover', $request->bright_sidebar_menuitem_hover  );
        Setting::set('color.sidebar.bright.upgradebox.background.main', $request->bright_sidebar_upgradebox_background_main  );
        Setting::set('color.sidebar.bright.upgradebox.background.border', $request->bright_sidebar_upgradebox_background_border  );
        Setting::set('color.sidebar.bright.upgradebox.button.main', $request->bright_sidebar_upgradebox_button_main  );
        Setting::set('color.sidebar.bright.upgradebox.button.border', $request->bright_sidebar_upgradebox_button_border  );
        Setting::set('color.sidebar.bright.upgradebox.button.hover', $request->bright_sidebar_upgradebox_button_hover  );
        Setting::set('color.sidebar.bright.upgradebox.buttontext.main', $request->bright_sidebar_upgradebox_buttontext_main  );
        Setting::set('color.sidebar.bright.upgradebox.text.main', $request->bright_sidebar_upgradebox_text_main  );
        Setting::set('color.sidebar.bright.upgradebox.headline.main', $request->bright_sidebar_upgradebox_headline_main );
        Setting::set('color.sidebar.bright.brandbottom.main', $request->bright_sidebar_brandbottom_main   );
        Setting::set('color.sidebar.bright.brandright.main', $request->bright_sidebar_brandright_main   );
        Setting::set('color.sidebar.bright.minimization.topitem.main', $request->bright_sidebar_minimization_topitem_main  );
        Setting::set('color.sidebar.bright.minimization.topitem.border', $request->bright_sidebar_minimization_topitem_border    );
        Setting::set('color.sidebar.bright.minimization.submenu.main', $request->bright_sidebar_minimization_submenu_main   );
        Setting::set('color.sidebar.bright.minimization.submenu.border', $request->bright_sidebar_minimization_submenu_border    );
        Setting::set('color.sidebar.bright.minimization.submenu.hover', $request->bright_sidebar_minimization_submenu_hover   );
        Setting::set('color.sidebar.bright.minimization.text.main', $request->bright_sidebar_minimization_text_main   );


        Setting::set('color.sidebar.dark.background.main', $request->dark_sidebar_background_main  );
        Setting::set('color.sidebar.dark.background.border', $request->dark_sidebar_background_border  );
        Setting::set('color.sidebar.dark.menuitem.main', $request->dark_sidebar_menuitem_main  );
        Setting::set('color.sidebar.dark.menuitem.hover', $request->dark_sidebar_menuitem_hover  );
        Setting::set('color.sidebar.dark.upgradebox.background.main', $request->dark_sidebar_upgradebox_background_main  );
        Setting::set('color.sidebar.dark.upgradebox.background.border', $request->dark_sidebar_upgradebox_background_border  );
        Setting::set('color.sidebar.dark.upgradebox.button.main', $request->dark_sidebar_upgradebox_button_main  );
        Setting::set('color.sidebar.dark.upgradebox.button.border', $request->dark_sidebar_upgradebox_button_border  );
        Setting::set('color.sidebar.dark.upgradebox.button.hover', $request->dark_sidebar_upgradebox_button_hover  );
        Setting::set('color.sidebar.dark.upgradebox.buttontext.main', $request->dark_sidebar_upgradebox_buttontext_main  );
        Setting::set('color.sidebar.dark.upgradebox.text.main', $request->dark_sidebar_upgradebox_text_main  );
        Setting::set('color.sidebar.dark.upgradebox.headline.main', $request->dark_sidebar_upgradebox_headline_main );
        Setting::set('color.sidebar.dark.brandbottom.main', $request->dark_sidebar_brandbottom_main   );
        Setting::set('color.sidebar.dark.brandright.main', $request->dark_sidebar_brandright_main   );
        Setting::set('color.sidebar.dark.minimization.topitem.main', $request->dark_sidebar_minimization_topitem_main  );
        Setting::set('color.sidebar.dark.minimization.topitem.border', $request->dark_sidebar_minimization_topitem_border    );
        Setting::set('color.sidebar.dark.minimization.submenu.main', $request->dark_sidebar_minimization_submenu_main   );
        Setting::set('color.sidebar.dark.minimization.submenu.border', $request->dark_sidebar_minimization_submenu_border    );
        Setting::set('color.sidebar.dark.minimization.submenu.hover', $request->dark_sidebar_minimization_submenu_hover   );
        Setting::set('color.sidebar.dark.minimization.text.main', $request->dark_sidebar_minimization_text_main   );

       //slider elements tab
       Setting::set('color.elem.bright.slider.background.background', $request->bright_elem_slider_background_background     );
       Setting::set('color.elem.bright.slider.text1.text', $request->bright_elem_slider_text1_text      );
       Setting::set('color.elem.bright.slider.text2.text', $request->bright_elem_slider_text2_text      );
       Setting::set('color.elem.bright.slider.text3.text', $request->bright_elem_slider_text3_text      );
       Setting::set('color.elem.bright.slider.navnormal.background', $request->bright_elem_slider_navnormal_background      );
       Setting::set('color.elem.bright.slider.navactive.background', $request->bright_elem_slider_navactive_background      );
       Setting::set('color.elem.bright.slider.navhover.background', $request->bright_elem_slider_navhover_background      );

       //elements tab
       Setting::set('color.elem.bright.background.background', $request->bright_elem_background_background    );
       Setting::set('color.elem.bright.h1.text', $request->bright_elem_h1_text    );
       Setting::set('color.elem.bright.h2.text', $request->bright_elem_h2_text    );
       Setting::set('color.elem.bright.h3.text', $request->bright_elem_h3_text    );
       Setting::set('color.elem.bright.h4.text', $request->bright_elem_h4_text    );
       Setting::set('color.elem.bright.h5.text', $request->bright_elem_h5_text    );
       Setting::set('color.elem.bright.h6.text', $request->bright_elem_h6_text    );
       Setting::set('color.elem.bright.subtext.text', $request->bright_elem_subtext_text     );
       Setting::set('color.elem.bright.text.text', $request->bright_elem_text_text     );

       Setting::set('color.elem.bright.box.main.background', $request->bright_elem_box_main_background     );
       Setting::set('color.elem.bright.box.main.border', $request->bright_elem_box_main_border      );
       Setting::set('color.elem.bright.box.inner.border', $request->bright_elem_box_inner_border      );

       Setting::set('color.elem.bright.link.normal.text', $request->bright_elem_link_normal_text       );
       Setting::set('color.elem.bright.link.hover.text', $request->bright_elem_link_hover_text        );

       Setting::set('color.elem.bright.tab.normal.background', $request->bright_elem_tab_normal_background         );
       Setting::set('color.elem.bright.tab.normal.text', $request->bright_elem_tab_normal_text        );
       Setting::set('color.elem.bright.tab.normal.border', $request->bright_elem_tab_normal_border         );
       
       Setting::set('color.elem.bright.tab.over.background', $request->bright_elem_tab_hover_background         );
       Setting::set('color.elem.bright.tab.over.text', $request->bright_elem_tab_hover_text        );
       Setting::set('color.elem.bright.tab.over.border', $request->bright_elem_tab_hover_border         );
       
       Setting::set('color.elem.bright.tab.active.background', $request->bright_elem_tab_active_background         );
       Setting::set('color.elem.bright.tab.active.text', $request->bright_elem_tab_active_text        );
       Setting::set('color.elem.bright.tab.active.border', $request->bright_elem_tab_active_border         );
       
       Setting::set('color.elem.bright.update.normal.background', $request->bright_elem_update_normal_background         );
       Setting::set('color.elem.bright.update.normal.text', $request->bright_elem_update_normal_text        );
       Setting::set('color.elem.bright.update.normal.border', $request->bright_elem_update_normal_border         );
       
       Setting::set('color.elem.bright.update.over.background', $request->bright_elem_update_hover_background         );
       Setting::set('color.elem.bright.update.over.text', $request->bright_elem_update_hover_text        );
       Setting::set('color.elem.bright.update.over.border', $request->bright_elem_update_hover_border         );
       
       Setting::set('color.elem.bright.update.active.background', $request->bright_elem_update_active_background         );
       Setting::set('color.elem.bright.update.active.text', $request->bright_elem_update_active_text        );
       Setting::set('color.elem.bright.update.active.border', $request->bright_elem_update_active_border         );
       
       Setting::set('color.elem.bright.save.normal.background', $request->bright_elem_save_normal_background         );
       Setting::set('color.elem.bright.save.normal.text', $request->bright_elem_save_normal_text        );
       Setting::set('color.elem.bright.save.normal.border', $request->bright_elem_save_normal_border         );
       
       Setting::set('color.elem.bright.save.hover.background', $request->bright_elem_save_hover_background         );
       Setting::set('color.elem.bright.save.hover.text', $request->bright_elem_save_hover_text        );
       Setting::set('color.elem.bright.save.hover.border', $request->bright_elem_save_hover_border         );
       
       Setting::set('color.elem.bright.save.active.background', $request->bright_elem_save_active_background         );
       Setting::set('color.elem.bright.save.active.text', $request->bright_elem_save_active_text        );
       Setting::set('color.elem.bright.save.active.border', $request->bright_elem_save_active_border         );
       
       Setting::set('color.elem.bright.addbtn.normal.background', $request->bright_elem_addbtn_normal_background         );
       Setting::set('color.elem.bright.addbtn.normal.text', $request->bright_elem_addbtn_normal_text        );
       Setting::set('color.elem.bright.addbtn.normal.border', $request->bright_elem_addbtn_normal_border         );
       
       Setting::set('color.elem.bright.addbtn.hover.background', $request->bright_elem_addbtn_hover_background         );
       Setting::set('color.elem.bright.addbtn.hover.text', $request->bright_elem_addbtn_hover_text        );
       Setting::set('color.elem.bright.addbtn.hover.border', $request->bright_elem_addbtn_hover_border         );
       
       Setting::set('color.elem.bright.addbtn.active.background', $request->bright_elem_addbtn_active_background         );
       Setting::set('color.elem.bright.addbtn.active.text', $request->bright_elem_addbtn_active_text        );
       Setting::set('color.elem.bright.addbtn.active.border', $request->bright_elem_addbtn_active_border         );
       
       Setting::set('color.elem.bright.input.normal.border', $request->bright_elem_input_normal_border           );
       Setting::set('color.elem.bright.input.active.border', $request->bright_elem_input_active_border          );

       Setting::set('color.elem.bright.message.success.background', $request->bright_elem_message_success_background           );
       Setting::set('color.elem.bright.message.success.text', $request->bright_elem_message_success_text            );
       Setting::set('color.elem.bright.message.success.border', $request->bright_elem_message_success_border            );
       
       Setting::set('color.elem.bright.message.warning.background', $request->bright_elem_message_warning_background           );
       Setting::set('color.elem.bright.message.warning.text', $request->bright_elem_message_warning_text            );
       Setting::set('color.elem.bright.message.warning.border', $request->bright_elem_message_warning_border            );

       Setting::set('color.elem.bright.message.error.background', $request->bright_elem_message_error_background           );
       Setting::set('color.elem.bright.message.error.text', $request->bright_elem_message_error_text            );
       Setting::set('color.elem.bright.message.error.border', $request->bright_elem_message_error_border            );

       Setting::set('color.elem.bright.switch.active.background', $request->bright_elem_switch_active_background              );
       Setting::set('color.elem.bright.switch.active.text', $request->bright_elem_switch_active_text               );
       Setting::set('color.elem.bright.switch.inactive.background', $request->bright_elem_switch_inactive_background               );
       Setting::set('color.elem.bright.switch.inactive.text', $request->bright_elem_switch_inactive_text               );

       Setting::set('color.elem.bright.enablebutton.normal.background', $request->bright_elem_enablebutton_normal_background                );
       Setting::set('color.elem.bright.enablebutton.normal.text', $request->bright_elem_enablebutton_normal_text                 );
       Setting::set('color.elem.bright.enablebutton.normal.border', $request->bright_elem_enablebutton_normal_border                 );
       Setting::set('color.elem.bright.enablebutton.hover.background', $request->bright_elem_enablebutton_hover_background                );
       Setting::set('color.elem.bright.enablebutton.hover.text', $request->bright_elem_enablebutton_hover_text                 );
       Setting::set('color.elem.bright.enablebutton.hover.border', $request->bright_elem_enablebutton_hover_border                 );
       
       Setting::set('color.elem.bright.disablebutton.normal.background', $request->bright_elem_disablebutton_normal_background                );
       Setting::set('color.elem.bright.disablebutton.normal.text', $request->bright_elem_disablebutton_normal_text                 );
       Setting::set('color.elem.bright.disablebutton.normal.border', $request->bright_elem_disablebutton_normal_border                 );
       Setting::set('color.elem.bright.disablebutton.hover.background', $request->bright_elem_disablebutton_hover_background                );
       Setting::set('color.elem.bright.disablebutton.hover.text', $request->bright_elem_disablebutton_hover_text                 );
       Setting::set('color.elem.bright.disablebutton.hover.border', $request->bright_elem_disablebutton_hover_border                 );

       Setting::set('color.elem.bright.searchbox.normal.border', $request->bright_elem_searchbox_normal_border                  );
       Setting::set('color.elem.bright.searchbox.normalbutton.background', $request->bright_elem_searchbox_normalbutton_background                  );
       Setting::set('color.elem.bright.searchbox.normalbutton.text', $request->bright_elem_searchbox_normalbutton_text                  );
       Setting::set('color.elem.bright.searchbox.active.border', $request->bright_elem_searchbox_active_border                  );
       Setting::set('color.elem.bright.searchbox.activebutton.background', $request->bright_elem_searchbox_activebutton_background                  );
       Setting::set('color.elem.bright.searchbox.activebutton.text', $request->bright_elem_searchbox_activebutton_text                  );
       
       Setting::set('color.elem.bright.tablecontent.odd.background', $request->bright_elem_tablecontent_odd_background                   );
       Setting::set('color.elem.bright.tablecontent.odd.text', $request->bright_elem_tablecontent_odd_text                  );
       Setting::set('color.elem.bright.tablecontent.even.background', $request->bright_elem_tablecontent_even_background                   );
       Setting::set('color.elem.bright.tablecontent.even.text', $request->bright_elem_tablecontent_even_text                   );

       Setting::set('color.elem.bright.userstatus.unconfirmed.background', $request->bright_elem_userstatus_unconfirmed_background                    );
       Setting::set('color.elem.bright.userstatus.unconfirmed.text', $request->bright_elem_userstatus_unconfirmed_text                    );
       Setting::set('color.elem.bright.userstatus.unconfirmed.border', $request->bright_elem_userstatus_unconfirmed_border                    );
       Setting::set('color.elem.bright.userstatus.active.background', $request->bright_elem_userstatus_active_background                    );
       Setting::set('color.elem.bright.userstatus.active.text', $request->bright_elem_userstatus_active_text                    );
       Setting::set('color.elem.bright.userstatus.active.border', $request->bright_elem_userstatus_active_border                    );
       Setting::set('color.elem.bright.userstatus.banned.background', $request->bright_elem_userstatus_banned_background                    );
       Setting::set('color.elem.bright.userstatus.banned.text', $request->bright_elem_userstatus_banned_text                    );
       Setting::set('color.elem.bright.userstatus.banned.border', $request->bright_elem_userstatus_banned_border                    );

       Setting::set('color.elem.bright.actionbutton.normal.text', $request->bright_elem_actionbutton_normal_text                     );
       Setting::set('color.elem.bright.actionbutton.hover.text', $request->bright_elem_actionbutton_hover_text                     );
       Setting::set('color.elem.bright.actionbutton.active.text', $request->bright_elem_actionbutton_active_text                     );
       Setting::set('color.elem.bright.actionbutton.active.border', $request->bright_elem_actionbutton_active_border                     );

       Setting::set('color.elem.bright.actionmenu.normal.background', $request->bright_elem_actionmenu_normal_background                      );
       Setting::set('color.elem.bright.actionmenu.normal.text', $request->bright_elem_actionmenu_normal_text                      );
       Setting::set('color.elem.bright.actionmenu.normal.border', $request->bright_elem_actionmenu_normal_border                      );
       Setting::set('color.elem.bright.actionmenu.hover.background', $request->bright_elem_actionmenu_hover_background                      );
       Setting::set('color.elem.bright.actionmenu.hover.text', $request->bright_elem_actionmenu_hover_text                      );
       Setting::set('color.elem.bright.actionmenu.hover.border', $request->bright_elem_actionmenu_hover_border                      );


       Setting::set('color.elem.dark.h1.text', $request->dark_elem_h1_text    );
       Setting::set('color.elem.dark.h2.text', $request->dark_elem_h2_text    );
       Setting::set('color.elem.dark.h3.text', $request->dark_elem_h3_text    );
       Setting::set('color.elem.dark.h4.text', $request->dark_elem_h4_text    );
       Setting::set('color.elem.dark.h5.text', $request->dark_elem_h5_text    );
       Setting::set('color.elem.dark.h6.text', $request->dark_elem_h6_text    );
       Setting::set('color.elem.dark.subtext.text', $request->dark_elem_subtext_text     );
       Setting::set('color.elem.dark.text.text', $request->dark_elem_text_text     );

       Setting::set('color.elem.dark.box.main.background', $request->dark_elem_box_main_background     );
       Setting::set('color.elem.dark.box.main.border', $request->dark_elem_box_main_border      );
       Setting::set('color.elem.dark.box.inner.border', $request->dark_elem_box_inner_border      );

       Setting::set('color.elem.dark.link.normal.text', $request->dark_elem_link_normal_text       );
       Setting::set('color.elem.dark.link.hover.text', $request->dark_elem_link_hover_text        );

       Setting::set('color.elem.dark.tab.normal.background', $request->dark_elem_tab_normal_background         );
       Setting::set('color.elem.dark.tab.normal.text', $request->dark_elem_tab_normal_text        );
       Setting::set('color.elem.dark.tab.normal.border', $request->dark_elem_tab_normal_border         );
       
       Setting::set('color.elem.dark.tab.over.background', $request->dark_elem_tab_hover_background         );
       Setting::set('color.elem.dark.tab.over.text', $request->dark_elem_tab_hover_text        );
       Setting::set('color.elem.dark.tab.over.border', $request->dark_elem_tab_hover_border         );
       
       Setting::set('color.elem.dark.tab.active.background', $request->dark_elem_tab_active_background         );
       Setting::set('color.elem.dark.tab.active.text', $request->dark_elem_tab_active_text        );
       Setting::set('color.elem.dark.tab.active.border', $request->dark_elem_tab_active_border         );
       
       Setting::set('color.elem.dark.update.normal.background', $request->dark_elem_update_normal_background         );
       Setting::set('color.elem.dark.update.normal.text', $request->dark_elem_update_normal_text        );
       Setting::set('color.elem.dark.update.normal.border', $request->dark_elem_update_normal_border         );
       
       Setting::set('color.elem.dark.update.over.background', $request->dark_elem_update_hover_background         );
       Setting::set('color.elem.dark.update.over.text', $request->dark_elem_update_hover_text        );
       Setting::set('color.elem.dark.update.over.border', $request->dark_elem_update_hover_border         );
       
       Setting::set('color.elem.dark.update.active.background', $request->dark_elem_update_active_background         );
       Setting::set('color.elem.dark.update.active.text', $request->dark_elem_update_active_text        );
       Setting::set('color.elem.dark.update.active.border', $request->dark_elem_update_active_border         );
       
       Setting::set('color.elem.dark.save.normal.background', $request->dark_elem_save_normal_background         );
       Setting::set('color.elem.dark.save.normal.text', $request->dark_elem_save_normal_text        );
       Setting::set('color.elem.dark.save.normal.border', $request->dark_elem_save_normal_border         );
       
       Setting::set('color.elem.dark.save.hover.background', $request->dark_elem_save_hover_background         );
       Setting::set('color.elem.dark.save.hover.text', $request->dark_elem_save_hover_text        );
       Setting::set('color.elem.dark.save.hover.border', $request->dark_elem_save_hover_border         );
       
       Setting::set('color.elem.dark.save.active.background', $request->dark_elem_save_active_background         );
       Setting::set('color.elem.dark.save.active.text', $request->dark_elem_save_active_text        );
       Setting::set('color.elem.dark.save.active.border', $request->dark_elem_save_active_border         );
       
       Setting::set('color.elem.dark.addbtn.normal.background', $request->dark_elem_addbtn_normal_background         );
       Setting::set('color.elem.dark.addbtn.normal.text', $request->dark_elem_addbtn_normal_text        );
       Setting::set('color.elem.dark.addbtn.normal.border', $request->dark_elem_addbtn_normal_border         );
       
       Setting::set('color.elem.dark.addbtn.hover.background', $request->dark_elem_addbtn_hover_background         );
       Setting::set('color.elem.dark.addbtn.hover.text', $request->dark_elem_addbtn_hover_text        );
       Setting::set('color.elem.dark.addbtn.hover.border', $request->dark_elem_addbtn_hover_border         );
       
       Setting::set('color.elem.dark.addbtn.active.background', $request->dark_elem_addbtn_active_background         );
       Setting::set('color.elem.dark.addbtn.active.text', $request->dark_elem_addbtn_active_text        );
       Setting::set('color.elem.dark.addbtn.active.border', $request->dark_elem_addbtn_active_border         );
       
       Setting::set('color.elem.dark.input.normal.border', $request->dark_elem_input_normal_border           );
       Setting::set('color.elem.dark.input.active.border', $request->dark_elem_input_active_border          );

       Setting::set('color.elem.dark.message.success.background', $request->dark_elem_message_success_background           );
       Setting::set('color.elem.dark.message.success.text', $request->dark_elem_message_success_text            );
       Setting::set('color.elem.dark.message.success.border', $request->dark_elem_message_success_border            );
       
       Setting::set('color.elem.dark.message.warning.background', $request->dark_elem_message_warning_background           );
       Setting::set('color.elem.dark.message.warning.text', $request->dark_elem_message_warning_text            );
       Setting::set('color.elem.dark.message.warning.border', $request->dark_elem_message_warning_border            );

       Setting::set('color.elem.dark.message.error.background', $request->dark_elem_message_error_background           );
       Setting::set('color.elem.dark.message.error.text', $request->dark_elem_message_error_text            );
       Setting::set('color.elem.dark.message.error.border', $request->dark_elem_message_error_border            );

       Setting::set('color.elem.dark.switch.active.background', $request->dark_elem_switch_active_background              );
       Setting::set('color.elem.dark.switch.active.text', $request->dark_elem_switch_active_text               );
       Setting::set('color.elem.dark.switch.inactive.background', $request->dark_elem_switch_inactive_background               );
       Setting::set('color.elem.dark.switch.inactive.text', $request->dark_elem_switch_inactive_text               );

       Setting::set('color.elem.dark.enablebutton.normal.background', $request->dark_elem_enablebutton_normal_background                );
       Setting::set('color.elem.dark.enablebutton.normal.text', $request->dark_elem_enablebutton_normal_text                 );
       Setting::set('color.elem.dark.enablebutton.normal.border', $request->dark_elem_enablebutton_normal_border                 );
       Setting::set('color.elem.dark.enablebutton.hover.background', $request->dark_elem_enablebutton_hover_background                );
       Setting::set('color.elem.dark.enablebutton.hover.text', $request->dark_elem_enablebutton_hover_text                 );
       Setting::set('color.elem.dark.enablebutton.hover.border', $request->dark_elem_enablebutton_hover_border                 );
       
       Setting::set('color.elem.dark.disablebutton.normal.background', $request->dark_elem_disablebutton_normal_background                );
       Setting::set('color.elem.dark.disablebutton.normal.text', $request->dark_elem_disablebutton_normal_text                 );
       Setting::set('color.elem.dark.disablebutton.normal.border', $request->dark_elem_disablebutton_normal_border                 );
       Setting::set('color.elem.dark.disablebutton.hover.background', $request->dark_elem_disablebutton_hover_background                );
       Setting::set('color.elem.dark.disablebutton.hover.text', $request->dark_elem_disablebutton_hover_text                 );
       Setting::set('color.elem.dark.disablebutton.hover.border', $request->dark_elem_disablebutton_hover_border                 );

       Setting::set('color.elem.dark.searchbox.normal.border', $request->dark_elem_searchbox_normal_border                  );
       Setting::set('color.elem.dark.searchbox.normalbutton.background', $request->dark_elem_searchbox_normalbutton_background                  );
       Setting::set('color.elem.dark.searchbox.normalbutton.text', $request->dark_elem_searchbox_normalbutton_text                  );
       Setting::set('color.elem.dark.searchbox.active.border', $request->dark_elem_searchbox_active_border                  );
       Setting::set('color.elem.dark.searchbox.activebutton.background', $request->dark_elem_searchbox_activebutton_background                  );
       Setting::set('color.elem.dark.searchbox.activebutton.text', $request->dark_elem_searchbox_activebutton_text                  );
       
       Setting::set('color.elem.dark.tablecontent.odd.background', $request->dark_elem_tablecontent_odd_background                   );
       Setting::set('color.elem.dark.tablecontent.odd.text', $request->dark_elem_tablecontent_odd_text                  );
       
       Setting::set('color.elem.dark.tablecontent.even.background', $request->dark_elem_tablecontent_even_background                   );
       Setting::set('color.elem.dark.tablecontent.even.text', $request->dark_elem_tablecontent_even_text                  );

       Setting::set('color.elem.dark.userstatus.unconfirmed.background', $request->dark_elem_userstatus_unconfirmed_background                    );
       Setting::set('color.elem.dark.userstatus.unconfirmed.text', $request->dark_elem_userstatus_unconfirmed_text                    );
       Setting::set('color.elem.dark.userstatus.unconfirmed.border', $request->dark_elem_userstatus_unconfirmed_border                    );
       Setting::set('color.elem.dark.userstatus.active.background', $request->dark_elem_userstatus_active_background                    );
       Setting::set('color.elem.dark.userstatus.active.text', $request->dark_elem_userstatus_active_text                    );
       Setting::set('color.elem.dark.userstatus.active.border', $request->dark_elem_userstatus_active_border                    );
       Setting::set('color.elem.dark.userstatus.banned.background', $request->dark_elem_userstatus_banned_background                    );
       Setting::set('color.elem.dark.userstatus.banned.text', $request->dark_elem_userstatus_banned_text                    );
       Setting::set('color.elem.dark.userstatus.banned.border', $request->dark_elem_userstatus_banned_border                    );

       Setting::set('color.elem.dark.actionbutton.normal.text', $request->dark_elem_actionbutton_normal_text                     );
       Setting::set('color.elem.dark.actionbutton.hover.text', $request->dark_elem_actionbutton_hover_text                     );
       Setting::set('color.elem.dark.actionbutton.active.text', $request->dark_elem_actionbutton_active_text                     );
       Setting::set('color.elem.dark.actionbutton.active.border', $request->dark_elem_actionbutton_active_border                     );

       Setting::set('color.elem.dark.actionmenu.normal.background', $request->dark_elem_actionmenu_normal_background                      );
       Setting::set('color.elem.dark.actionmenu.normal.text', $request->dark_elem_actionmenu_normal_text                      );
       Setting::set('color.elem.dark.actionmenu.normal.border', $request->dark_elem_actionmenu_normal_border                      );
       Setting::set('color.elem.dark.actionmenu.hover.background', $request->dark_elem_actionmenu_hover_background                      );
       Setting::set('color.elem.dark.actionmenu.hover.text', $request->dark_elem_actionmenu_hover_text                      );
       Setting::set('color.elem.dark.actionmenu.hover.border', $request->dark_elem_actionmenu_hover_border                      );
       Setting::set('color.elem.dark.background.background', $request->dark_elem_background_background    );
       
       Setting::set('color.elem.bright.popover.header.background', $request->bright_elem_popover_header_background     );
       Setting::set('color.elem.bright.popover.header.text', $request->bright_elem_popover_header_text     );
       Setting::set('color.elem.bright.popover.header.border', $request->bright_elem_popover_header_border     );
       Setting::set('color.elem.bright.popover.body.background', $request->bright_elem_popover_body_background     );
       Setting::set('color.elem.bright.popover.body.text', $request->bright_elem_popover_body_text     );
       Setting::set('color.elem.bright.popover.body.border', $request->bright_elem_popover_body_border     );
       
       Setting::set('color.elem.dark.popover.header.background', $request->dark_elem_popover_header_background     );
       Setting::set('color.elem.dark.popover.header.text', $request->dark_elem_popover_header_text     );
       Setting::set('color.elem.dark.popover.header.border', $request->dark_elem_popover_header_border     );
       Setting::set('color.elem.dark.popover.body.background', $request->dark_elem_popover_body_background     );
       Setting::set('color.elem.dark.popover.body.text', $request->dark_elem_popover_body_text     );
       Setting::set('color.elem.dark.popover.body.border', $request->dark_elem_popover_body_border     );
    
       Setting::set('color.elem.bright.placeholder.text', $request->bright_elem_placeholder_text      );
       Setting::set('color.elem.bright.sign.normal.background', $request->bright_elem_sign_normal_background       );
       Setting::set('color.elem.bright.sign.normal.text', $request->bright_elem_sign_normal_text       );
       Setting::set('color.elem.bright.sign.normal.border', $request->bright_elem_sign_normal_border       );
       Setting::set('color.elem.bright.sign.over.background', $request->bright_elem_sign_over_background       );
       Setting::set('color.elem.bright.sign.over.text', $request->bright_elem_sign_over_text       );
       Setting::set('color.elem.bright.sign.over.border', $request->bright_elem_sign_over_border       );
       Setting::set('color.elem.bright.sign.active.background', $request->bright_elem_sign_active_background       );
       Setting::set('color.elem.bright.sign.active.text', $request->bright_elem_sign_active_text       );
       Setting::set('color.elem.bright.sign.active.border', $request->bright_elem_sign_active_border       );
    
       Setting::set('color.elem.bright.sign.boxshadow', $request->bright_elem_sign_boxshadow        );
       Setting::set('color.elem.bright.tab.boxshadow', $request->bright_elem_tab_boxshadow        );
       Setting::set('color.elem.bright.update.boxshadow', $request->bright_elem_update_boxshadow        );
       Setting::set('color.elem.bright.save.boxshadow', $request->bright_elem_save_boxshadow        );
       Setting::set('color.elem.bright.addbtn.boxshadow', $request->bright_elem_addbtn_boxshadow        );
       Setting::set('color.elem.bright.box.boxshadow', $request->bright_elem_box_boxshadow );
       Setting::set('color.sidebar.bright.upgradebox.boxshadow', $request->bright_sidebar_upgradebox_boxshadow  );
       Setting::set('color.sidebar.dark.upgradebox.boxshadow', $request->dark_sidebar_upgradebox_boxshadow  );
       
      
       Setting::set('color.elem.dark.placeholder.text', $request->dark_elem_placeholder_text      );
       
       Setting::set('color.elem.dark.tab.boxshadow', $request->dark_elem_tab_boxshadow        );
       Setting::set('color.elem.dark.update.boxshadow', $request->dark_elem_update_boxshadow        );
       Setting::set('color.elem.dark.save.boxshadow', $request->dark_elem_save_boxshadow        );
       Setting::set('color.elem.dark.addbtn.boxshadow', $request->dark_elem_addbtn_boxshadow        );
       Setting::set('color.elem.dark.box.boxshadow', $request->dark_elem_box_boxshadow );
      
       Setting::set('color.elem.bright.alpha.sign.boxshadow', $this->hex2rgba($request->bright_elem_sign_boxshadow, 0.5)      );
       Setting::set('color.elem.bright.alpha.tab.boxshadow', $this->hex2rgba($request->bright_elem_tab_boxshadow, 0.5));
       Setting::set('color.elem.bright.alpha.update.boxshadow', $this->hex2rgba($request->bright_elem_update_boxshadow, 0.5) );
       Setting::set('color.elem.bright.alpha.save.boxshadow', $this->hex2rgba($request->bright_elem_save_boxshadow, 0.5));
       Setting::set('color.elem.bright.alpha.addbtn.boxshadow', $this->hex2rgba($request->bright_elem_addbtn_boxshadow, 0.5));
       Setting::set('color.elem.bright.alpha.box.boxshadow', $this->hex2rgba($request->bright_elem_box_boxshadow, 0.2) );
       
       Setting::set('color.sidebar.dark.alpha.upgradebox.boxshadow', $this->hex2rgba($request->dark_sidebar_upgradebox_boxshadow , 0.2) );
       Setting::set('color.sidebar.bright.alpha.upgradebox.boxshadow', $this->hex2rgba($request->bright_sidebar_upgradebox_boxshadow , 0.2) );
       
      
       Setting::set('color.elem.dark.alpha.tab.boxshadow', $this->hex2rgba($request->dark_elem_tab_boxshadow, 0.5));
       Setting::set('color.elem.dark.alpha.update.boxshadow', $this->hex2rgba($request->dark_elem_update_boxshadow, 0.5) );
       Setting::set('color.elem.dark.alpha.save.boxshadow', $this->hex2rgba($request->dark_elem_save_boxshadow, 0.5));
       Setting::set('color.elem.dark.alpha.addbtn.boxshadow', $this->hex2rgba($request->dark_elem_addbtn_boxshadow, 0.5));
       Setting::set('color.elem.dark.alpha.box.boxshadow', $this->hex2rgba($request->dark_elem_box_boxshadow, 0.2) );
       Setting::set('color.elem.dark.alpha.box.boxshadow', $this->hex2rgba($request->dark_elem_box_boxshadow, 0.2) );
       Setting::set('color.elem.dark.alpha.box.boxshadow', $this->hex2rgba($request->dark_elem_box_boxshadow, 0.2) );
      
  
       Setting::set('color.elem.bright.checkbox.checked.background', $request->bright_elem_checkbox_checked_background );
       Setting::set('color.elem.bright.checkbox.unchecked.background', $request->bright_elem_checkbox_unchecked_background );
       Setting::set('color.elem.dark.checkbox.checked.background', $request->dark_elem_checkbox_checked_background );
       Setting::set('color.elem.dark.checkbox.unchecked.background', $request->dark_elem_checkbox_unchecked_background );

       Setting::set('color.elem.bright.tablecontent.linknormal.text', $request->bright_elem_tablecontent_linknormal_text );
       Setting::set('color.elem.bright.tablecontent.linkover.text', $request->bright_elem_tablecontent_linkover_text );
       Setting::set('color.elem.bright.tablecontent.active.text', $request->bright_elem_tablecontent_active_text );
       Setting::set('color.elem.dark.tablecontent.linknormal.text', $request->dark_elem_tablecontent_linknormal_text );
       Setting::set('color.elem.dark.tablecontent.linkover.text', $request->dark_elem_tablecontent_linkover_text );
       Setting::set('color.elem.dark.tablecontent.active.text', $request->dark_elem_tablecontent_active_text );

       Setting::set('color.elem.dark.enablebutton.boxshadow', $request->dark_elem_enablebutton_boxshadow );
       Setting::set('color.elem.dark.disablebutton.boxshadow', $request->dark_elem_disablebutton_boxshadow );
       Setting::set('color.elem.bright.enablebutton.boxshadow', $request->bright_elem_enablebutton_boxshadow );
       Setting::set('color.elem.bright.disablebutton.boxshadow', $request->bright_elem_disablebutton_boxshadow );
  //    Setting::set('', $request->);

        Setting::set('color.elem.bright.progress.background', $request->bright_elem_progress_background );
        Setting::set('color.elem.bright.progress.text', $request->bright_elem_progress_text );
        Setting::set('color.elem.dark.progress.background', $request->dark_elem_progress_background );
        Setting::set('color.elem.dark.progress.text', $request->dark_elem_progress_text );

        Setting::set('color.elem.bright.searchbox.normalbutton.border', $request->bright_elem_searchbox_normalbutton_border );
        Setting::set('color.elem.bright.searchbox.activebutton.border', $request->bright_elem_searchbox_activebutton_border );
        Setting::set('color.elem.dark.searchbox.activebutton.border', $request->dark_elem_searchbox_activebutton_border );
        Setting::set('color.elem.dark.searchbox.normalbutton.border', $request->dark_elem_searchbox_normalbutton_border );

        // table pagination
        Setting::set('color.elem.bright.tablepage.normal.background', $request->bright_elem_tablepage_normal_background );
        Setting::set('color.elem.bright.tablepage.normal.text', $request->bright_elem_tablepage_normal_text );
        Setting::set('color.elem.bright.tablepage.normal.border', $request->bright_elem_tablepage_normal_border );
        Setting::set('color.elem.bright.tablepage.over.background', $request->bright_elem_tablepage_over_background );
        Setting::set('color.elem.bright.tablepage.over.text', $request->bright_elem_tablepage_over_text );
        Setting::set('color.elem.bright.tablepage.over.border', $request->bright_elem_tablepage_over_border );
        Setting::set('color.elem.bright.tablepage.active.background', $request->bright_elem_tablepage_active_background );
        Setting::set('color.elem.bright.tablepage.active.text', $request->bright_elem_tablepage_active_text );
        Setting::set('color.elem.bright.tablepage.active.border', $request->bright_elem_tablepage_active_border );
        
        Setting::set('color.elem.dark.tablepage.normal.background', $request->dark_elem_tablepage_normal_background );
        Setting::set('color.elem.dark.tablepage.normal.text', $request->dark_elem_tablepage_normal_text );
        Setting::set('color.elem.dark.tablepage.normal.border', $request->dark_elem_tablepage_normal_border );
        Setting::set('color.elem.dark.tablepage.over.background', $request->dark_elem_tablepage_over_background );
        Setting::set('color.elem.dark.tablepage.over.text', $request->dark_elem_tablepage_over_text );
        Setting::set('color.elem.dark.tablepage.over.border', $request->dark_elem_tablepage_over_border );
        Setting::set('color.elem.dark.tablepage.active.background', $request->dark_elem_tablepage_active_background );
        Setting::set('color.elem.dark.tablepage.active.text', $request->dark_elem_tablepage_active_text );
        Setting::set('color.elem.dark.tablepage.active.border', $request->dark_elem_tablepage_active_border );
        
        Setting::save();
        event(new SettingsUpdated);
        $this->colortab = $request->color_hash;
        return view('settings.general', ['hash' =>  $this->colortab, 'imagetab' => $this->imagetab]);
    }
    /* Convert hexdec color string to rgb(a) string */
 
        public function hex2rgba($color, $opacity = false) {
        
            $default = 'rgb(0,0,0)';
        
            //Return default if no color provided
            if(empty($color))
                return $default; 
        
            //Sanitize $color if "#" is provided 
                if ($color[0] == '#' ) {
                    $color = substr( $color, 1 );
                }
        
                //Check if color has 6 or 3 characters and get values
                if (strlen($color) == 6) {
                        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
                } elseif ( strlen( $color ) == 3 ) {
                        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
                } else {
                        return $default;
                }
        
                //Convert hexadec to rgb
                $rgb =  array_map('hexdec', $hex);
        
                //Check if opacity is set(rgba or rgb)
                if($opacity){
                    if(abs($opacity) > 1)
                        $opacity = 1.0;
                    $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
                } else {
                    $output = 'rgb('.implode(",",$rgb).')';
                }
        
                //Return rgb(a) color string
                return $output;
        }
    /**
     * Change Unlimited Access Image
     */
    public function unlimitedImageUpdate(Request $request)
    {
        $request->validate(['unlimitImage' => 'image']);
        if($request->unlimitImage != null){
            $imageName = 'unlimitedImage.'.$request->unlimitImage->extension(); 
        
            $request->unlimitImage->move(public_path('assets/img/'), $imageName);
            
            Setting::set('unlimited', 'assets/img/'.$imageName);
        }
        Setting::set('unlimit.headline', $request->headline);
        Setting::set('unlimit.content', $request->content);
        Setting::set('unlimit.buttontext', $request->buttontext);
        Setting::set('unlimit.link', $request->link);

        Setting::save();
        event(new SettingsUpdated);
        $this->imagetab = $request->unlimited_tab;
        return view('settings.general', ['hash' =>  $this->colortab, 'imagetab' => $this->imagetab]);


    }
    
    public function unlimitedImageDelete(Request $request){
        Setting::set('unlimited', '');
        Setting::save();
        event(new SettingsUpdated);

        return back()
            ->withSuccess(__('Delete Unlimited Access Image successfully.'));
    }

    /**
     * Change Login/Registeration Image
     */
    public function logImageUpdate(Request $request)
    {
        $request->validate(['logImage' => 'image']);
    
        $imageName = 'loginImage.'.$request->logImage->extension(); 
     
        $request->logImage->move(public_path('assets/img/'), $imageName);
        
        /* Store $imageName name in DATABASE from HERE */
        Setting::set('logImage', 'assets/img/'.$imageName);
        Setting::save();
        event(new SettingsUpdated);
        $this->imagetab = $request->login_tab;

        return view('settings.general', ['hash' =>  $this->colortab, 'imagetab' => $this->imagetab]);

    }

    public function logImageDelete(Request $request){
        Setting::set('logImage', '');
        Setting::save();
        event(new SettingsUpdated);

        return back()
            ->withSuccess(__('Delete Login/Registration Image successfully.'));
    }

    /**
     * Email Template
     */

     public function emailTemplate()
     {
         return view('settings.email-template');
     }
     public function changeEmailNewAccount(Request $request)
     {
        Setting::set('email-template.newaccount.greeting', $request->greeting);
        Setting::set('email-template.newaccount.header', $request->header);
        Setting::set('email-template.newaccount.footer', $request->footer);

        Setting::save();
        event(new SettingsUpdated);
        

        return view('settings.email-template', ["email_tab" => $request->email_tab]);
     }

     public function changeEmailLogin(Request $request)
     {
        Setting::set('email-template.login.greeting', $request->greeting);
        Setting::set('email-template.login.header', $request->header);
        Setting::set('email-template.login.footer', $request->footer);

        Setting::save();
        event(new SettingsUpdated);

        return view('settings.email-template', ["email_tab" => $request->email_tab]);
     }

     public function changeEmailPassword(Request $request)
     {
        Setting::set('email-template.password.greeting', $request->greeting);
        Setting::set('email-template.password.header', $request->header);
        Setting::set('email-template.password.footer', $request->footer);

        Setting::save();
        event(new SettingsUpdated);

        return view('settings.email-template', ["email_tab" => $request->email_tab]);
     }

     public function changeEmail2FA(Request $request)
     {
        Setting::set('email-template.twofa.greeting', $request->greeting);
        Setting::set('email-template.twofa.header', $request->header);
        Setting::set('email-template.twofa.footer', $request->footer);

        Setting::save();
        event(new SettingsUpdated);

        return view('settings.email-template', ["email_tab" => $request->email_tab]);
     }
    
    public function copyrightUpdate(Request $request){
        Setting::set('copyright', $request->copyright);

        Setting::save();
        event(new SettingsUpdated);

        return back()->withSuccess(__('Change copyright text successfully.'));
    }
}
