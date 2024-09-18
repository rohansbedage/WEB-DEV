<style>
	#chat_convo{
		max-height: 65vh;
	}
	#chat_convo .direct-chat-messages{
		min-height: 250px;
		height: inherit;
	}
	#chat_convo .card-body {
		overflow: auto;
	}
</style>


		<div class="col-lg-12 bg-white <?php echo isMobileDevice() == false ?  "" : '' ?>">
			<div class="card direct-chat direct-chat-primary" id="chat_convo">
	
       
              <div class="card-body  my-2">
              
                <div class="direct-chat-messages bg-white">
                  
                  <div class="direct-chat-msg mr-4">
                    <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('bot_avatar')) ?>" alt="message user image">
                   
                    <div class="direct-chat-text">
                      
					 <?php echo $_settings->info('intro') ?>
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
              
                </div>
       
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form id="send_chat" method="post">
                  <div class="input-group">
				 <textarea type="text" name="message"  placeholder="Type Message ..." class="form-control" rows="1" required=""></textarea>
                   <span class="input-group-append">

					<button type="submit" class="btn btn-space btn-light mx-1 my-2"> <h5> Send Reply</h5></button>
                     
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
		</div>
	</div>
</div>
<div class="d-none" id="user_chat">
	<div class="direct-chat-msg right  ml-4">
        <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('user_avatar')) ?>" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text"></div>
        <!-- /.direct-chat-text -->
    </div>
</div>
<div class="d-none" id="bot_chat">
	<div class="direct-chat-msg mr-4">
        <img class="direct-chat-img border-1 border-primary" src="<?php echo validate_image($_settings->info('bot_avatar')) ?>" alt="message user image">
        <!-- /.direct-chat-img -->
        <div class="direct-chat-text"></div>
        <!-- /.direct-chat-text -->
  </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('[name="message"]').keypress(function(e){
			console.log()
			if(e.which === 13 && e.originalEvent.shiftKey == false){
				$('#send_chat').submit()
				return false;
			}
		})
		$('#send_chat').submit(function(e){
			e.preventDefault();
			var message = $('[name="message"]').val();
			if(message == '' || message == null) return false;
			var uchat = $('#user_chat').clone();
			uchat.find('.direct-chat-text').html(message);
			$('#chat_convo .direct-chat-messages').append(uchat.html());
			$('[name="message"]').val('')
			$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");

			$.ajax({
				url:_base_url_+"classes/Master.php?f=get_response",
				method:'POST',
				data:{message:message},
				error: err=>{
					console.log(err)
					alert_toast("An error occured.",'error');
					end_loader();
				},
				success:function(resp){
					if(resp){
						resp = JSON.parse(resp)
						if(resp.status == 'success'){
							var bot_chat = $('#bot_chat').clone();
								bot_chat.find('.direct-chat-text').html(resp.message);
								$('#chat_convo .direct-chat-messages').append(bot_chat.html());
								$("#chat_convo .card-body").animate({ scrollTop: $("#chat_convo .card-body").prop('scrollHeight') }, "fast");
						}
					}
				}
			})
		})

	})
</script>
