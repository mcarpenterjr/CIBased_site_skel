<div class="row">

    <div class="col-md-6">
        
        <form id="login_form" class="form-horizontal" method="post" action="<?=site_url('api/login')?>">
          
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-4">
                  <input type="email" class="form-control" name="email" placeholder="Login">
                </div>
            </div>
            
          <div class="form-group">
            <label for="pasw" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-4">
                <input type="password" class="form-control" name="pasw" placeholder="Password">
            </div>
          </div>
            
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Remember me
                </label>
              </div>
            </div>
          </div>
            
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-4">
              <input type="submit" value="Login" class="btn btn-primary" />
            </div>
        </div>
    </form> 
        
        <a href="<?=site_url('home/register')?>">Register</a>
</div>
    

<script type="text/javascript">
    $(function() {
        $('#login_form_error').hide();
        $('#login_form').submit(function(event) {
            event.preventDefault();
            var url = $(this).attr('action');
            var postData = $(this).serialize();

            $.post(url, postData, function(o) {
                if (o.result === 1) {
                    window.location.href = '<?= site_url('dashboard') ?>';
                } else {
                    $("#login_form_error").show();
                    var output = '<ul>';
                    output += '<li>Your login information was incorrect.</li>';
                    output += '</ul>';
                    $("#login_form_error").html(output);
                }
            }, 'json');
        });
    });
</script>