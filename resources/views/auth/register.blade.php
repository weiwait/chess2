<div class="registerPage"></div>
<div class="register">
    <h1>weiwait</h1>
    <form id="ajaxSub" action="{{ url('auth/register') }}" method="post" onsubmit="return ajaxSub();">
        {!! csrf_field() !!}
        <input type="text" title="" name="name" placeholder="your username" value="{{ old('name') }}">
        <input type="password" title="" name="password" placeholder="your password">
        <input type="password" title="" name="password_confirmation" placeholder="again password">
        <input type="email" title="" name="email" placeholder="your email" value="{{ old('email') }}">
        <input type="submit" value="submit" title="">
    </form>
</div>
<div class="message">
    <h1>successfully</h1>
</div>
<script class="registerScript">
    function ajaxSub() {
        $('#ajaxSub').ajaxSubmit(function (data) {
            console.log(data.data);
             if (data) {
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