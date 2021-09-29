window.onload = function() {
        document.getElementById('contact-form').addEventListener('submit', function(event) {
                event.preventDefault();
                var tempParams = {
                        sender_name: document.getElementById('sender-name').value,
                        sender_mail: document.getElementById('sender-mail').value,
                        sender_subject: document.getElementById('sender-subject').value,
                        sender_message: document.getElementById('sender-message').value,
                };
        
                emailjs.send('service_e7tkgud', 'template_nhhevaw', tempParams)
                .then(function() {
                        console.log('SUCCESS!');
                }, function(error) {
                        console.log('FAILED...', error);
                });
        });
}