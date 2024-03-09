<script>
    // toast variables here
    const successToast = document.getElementById('successToast')
    const errorToast = document.getElementById('errorToast');

    function removeExtraWhitespace(str) {
        return str.replace(/\s+/g, ' ').trim();
    }

    <?php if ($parameter === 'register-frm') { ?>

        const registerForm = $('#register-form');

        function handleRegisterSubmit(event) {
            event.preventDefault();

            sendRegisterFormData();
        }

        registerForm.submit(handleRegisterSubmit)

        function sendRegisterFormData() {
            let email = $('#email').val();
            let username = $('#username').val();
            let password = $('#password').val();

            $.ajax({
                url: '<?= MAIN_PAGE . urlencode($encryption->encrypt('register-process')) . '&page_type=0' ?>',
                type: 'POST',
                data: {
                    email: email,
                    username: username,
                    password: password,
                },
                success: function(data) {
                    console.log(data)
                    if (removeExtraWhitespace(data) === 'success') {
                        $('#successToast .toast-body').html('<i class="bi bi-check-lg"></i> Created an account successfully');
                        const triggerSuccessToast = new bootstrap.Toast(successToast)
                        triggerSuccessToast.show()
                        setTimeout(() => {
                            location.href = '<?= MAIN_PAGE . urlencode($encryption->encrypt('login-frm')) ?>'
                        }, 2000); // delay 2 seconds
                        // Optionally, show a success message or perform other actions
                    } else if (removeExtraWhitespace(data) === 'username_exists') {
                        // Change the message of errorToast and add an exclamation icon
                        $('#errorToast .toast-body').html('<i class="bi bi-exclamation-circle me-2"></i> Username exist!');
                        const triggerErrorToast = new bootstrap.Toast(errorToast);
                        triggerErrorToast.show();
                    } else {
                        // Change the message of errorToast and add an exclamation icon
                        $('#errorToast .toast-body').html('<i class="bi bi-exclamation-circle me-2"></i> Failed to create an account');
                        const triggerErrorToast = new bootstrap.Toast(errorToast);
                        triggerErrorToast.show();
                        // Optionally, show an error message or perform other actions
                    }
                },
                error: function(xhr, status, error) {

                },
                complete: function() {
                    // Re-enable submit button after request completes
                    $('#submit-btn').prop('disabled', false);
                }
            })
        }

    <?php } elseif ($parameter === 'login-frm') { ?>

        // const loginForm = $('#login-form');

        // function handleLoginSubmit(event) {
        //     event.preventDefault(event);
        //     sendLoginFormData();
        // }

        // function sendLoginFormData() {
        //     let username = $('#username').val();
        //     let password = $('#password').val();

        //     $.ajax({
        //         url: '<?= MAIN_PAGE . urlencode($encryption->encrypt('login-process')) . '&page_type=0' ?>',
        //         type: 'POST',
        //         data: {
        //             username: username,
        //             password: password,
        //         },
        //         beforeSend: function() {
        //             // Show spinner and change button text
        //             $('#spinner').removeClass('d-none');
        //             $('#button-text').text('Logging in...');
        //             $('#login-button').prop("disabled", true)
        //         },
        //         success: function(data) {
        //             console.log(data)
        //             switch (data) {
        //                 case 'valid':
        //                     // $('#successToast .toast-body').html('<i class="bi bi-check-lg"></i> Login successfull');
        //                     // const triggerSuccessToast = new bootstrap.Toast(successToast)
        //                     // triggerSuccessToast.show()
        //                     setTimeout(() => {
        //                         location.href = '<?= URL_LOCATION ?>'
        //                         <?php 
        //                             $_SESSION['login']  = 'success';
        //                         ?>
        //                     }, 3500); // delay 2 seconds
        //                     break;
        //                 case 'invalid':
        //                     // Change the message of errorToast and add an exclamation icon
        //                     $('#errorToast .toast-body').html('<i class="bi bi-exclamation-circle me-2"></i> Incorrect username or password!');
        //                     const triggerErrorToast = new bootstrap.Toast(errorToast);
        //                     triggerErrorToast.show();
        //                     break;
        //                 case 'error':
        //                     // Change the message of errorToast and add an exclamation icon
        //                     $('#errorToast .toast-body').html('<i class="bi bi-exclamation-circle me-2"></i> User not in the record. Please create an acount.');
        //                     const triggerError1Toast = new bootstrap.Toast(errorToast);
        //                     triggerError1Toast.show();
        //                     break;

        //             }
        //         },
        //         error: function(xhr, status, error) {
        //             $('#errorToast .toast-body').html('<i class="bi bi-exclamation-circle me-2"></i> Something went wrong!');
        //             const triggerErrorToast = new bootstrap.Toast(errorToast);
        //             triggerErrorToast.show();
        //         },
        //         complete: function() {
        //             loginForm.trigger('reset')
        //         }
        //     })
        // }

        // loginForm.submit(handleLoginSubmit)

    <?php } ?>
</script>