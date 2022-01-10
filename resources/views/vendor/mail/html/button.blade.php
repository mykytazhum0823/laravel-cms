<table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
    <tr>
        <td align="center">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                <tr>
                    <td align="center">
                        <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                            <tr>
                                <td>
                                    <a href="{{ $url }}" class="button custom-btn" target="_blank">{{ $slot }}</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<style>
    a.custom-btn{
        background-color: {{setting('maincolor')??'#1c8966'}};
        border-top: 10px solid {{setting('maincolor')??'#1c8966'}};
        border-right: 18px solid {{setting('maincolor')??'#1c8966'}};
        border-bottom: 10px solid {{setting('maincolor')??'#1c8966'}};
        border-left: 18px solid {{setting('maincolor')??'#1c8966'}};
    }
</style>