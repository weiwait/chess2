<div class="registerPage"></div>
<div class="register">
    <h1>weiwait</h1>
    <form id="ajaxSub" action="{{ url('auth/login') }}" method="post" onsubmit="return ajaxSub();">
        {!! csrf_field() !!}
        <input type="email" title="" name="email" placeholder="your email" value="{{ old('email') }}">
        <input type="password" title="" name="password" placeholder="your password">
        <input type="submit" value="submit" title="">
    </form>
</div>
<div class="message">
    <h1>successfully</h1>
</div>
<script class="registerScript">
    function ajaxSub() {
        $('#ajaxSub').ajaxSubmit(function (data) {
            if (data) {
                window.isLogin = true;
                $('.message').css({
                    'transition': 'transform 1.5s',
                    'transform': 'translateY(120px)'
                });
            }
        });
        return false;
    }

    $('.message').on('transitionend', function() {
        removeRegisterPage();
    });

    $('.registerPage').click(function () {
        removeRegisterPage();
    });

    function removeRegisterPage() {
        $('.registerPage, .register, .message, .registerScript').remove();
    }

</script>