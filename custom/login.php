<div class="zm-tt-form-container">
    <form action="javascript://" id="network_login_form">
        <div class="form-wrapper">
        <input type="hidden" value="task" name="post_type" />
        <input type="hidden" name="security" value="<?php print wp_create_nonce( 'get-tt-ajax-forms' );?>">
        <p>
            <label>User Name</label>
            <input type="text" name="user_name" id="user_name" />
        </p>
        <p>
            <label>Password</label>
            <input type="password" name="password" id="password" />
        </p>
        <p>
            <label>Remember</label>
            <input type="checkbox" name="remember" id="remember" />
        </p>
        </div>

        <div class="button-container">
            <input id="login_button" class="button" type="submit" value="Submit" accesskey="p" name="submit" />
            <input id="login_exit" class="button" type="submit" value="Exit" name="exit" />
        </div>
    </form>
</div>
