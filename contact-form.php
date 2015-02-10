<?php
                    if($_SERVER['REQUEST_METHOD'] == 'POST'){  
                        if (isset($_POST["submit"])) {
                            $email = 'biuro@bilans.eu';
                            $dane = $_POST['dane'];
                            $mail = $_POST['mail'];
                            $message = $_POST['message'];
                            $ip = $_SERVER['REMOTE_ADDR'];
                            $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
                            $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
                            $host     = $_SERVER['HTTP_HOST'];
                            $script   = $_SERVER['SCRIPT_NAME'];
                            $params   = $_SERVER['QUERY_STRING']; 
                            $currentUrl = $protocol . '://' . $host . $script . '?' . $params;
                            $mailText = $dane.', '.$mail.', \n\n'.$message;
                            $mailHeader = $mail;
                            @mail($email, '[Formularz kontaktowy] - GoodGirls.pl', $mailText, $mailHeader) or die('Błąd: wiadomość nie została wysłana');
                            echo 'Wiadomość została wysłana';                                                         
                        }
                    }
                ?>