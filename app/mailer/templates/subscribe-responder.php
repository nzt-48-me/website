<?php
$responder_template = '
<!DOCTYPE html>
	<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
	<head>
	    <meta charset="utf-8"> 
	    <meta name="viewport" content="width=device-width"> 
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="x-apple-disable-message-reformatting"> 
	    <title></title> 
	    <style>
	        html,
	        body {
	            margin: 0 auto !important;
	            padding: 0 !important;
	            height: 100% !important;
	            width: 100% !important;
	        }
	        * {
	            -ms-text-size-adjust: 100%;
	            -webkit-text-size-adjust: 100%;
	        }
	        div[style*="margin: 16px 0"] {
	            margin: 0 !important;
	        }
	        table,
	        td {
	            mso-table-lspace: 0pt !important;
	            mso-table-rspace: 0pt !important;
	        }
	        table {
	            border-spacing: 0 !important;
	            border-collapse: collapse !important;
	            table-layout: fixed !important;
	            margin: 0 auto !important;
	        }
	        table table table {
	            table-layout: auto;
	        }
	
	
	        img {
	            -ms-interpolation-mode:bicubic;
	        }
	        *[x-apple-data-detectors],  
	        .x-gmail-data-detectors,    
	        .x-gmail-data-detectors *,
	        .aBn {
	            border-bottom: 0 !important;
	            cursor: default !important;
	            color: inherit !important;
	            text-decoration: none !important;
	            font-size: inherit !important;
	            font-family: inherit !important;
	            font-weight: inherit !important;
	            line-height: inherit !important;
	        }
	        .a6S {
	           display: none !important;
	           opacity: 0.01 !important;
	        }
	        .button-link {
	            text-decoration: none !important;
	        }
	        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { 
	            .email-container {
	                min-width: 375px !important;
	            }
	        }
		    @media screen and (max-width: 480px) {
		        div > u ~ div .gmail {
			        min-width: 100vw;
		        }
			}
	        .button-td,
	        .button-a {
	            transition: all 100ms ease-in;
	        }
	        .button-td:hover,
	        .button-a:hover {
	            background: #38d289 !important;
	            border-color: #38d289 !important;
	        }
	        @media screen and (max-width: 600px) {
	            .email-container {
	                width: 100% !important;
	                margin: auto !important;
				}
	            .email-container p {
	                font-size: 17px !important;
	            }
	        }
	    </style>
	
	</head>
	<body width="100%" bgcolor="#EDEFF6" style="margin: 0; mso-line-height-rule: exactly;">
	    <center style="width: 100%; background: #EDEFF6; text-align: left;">
	    
	        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
	            <tr>
	                <td style="padding: 40px 0; text-align: center">
                        <img src="http://codeytech.com/site-templates/applify/assets/img/logo/applify-logo@2x.png" width="176" alt="logo" border="0" style="height: auto; background: #EDEFF6; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #EDEFF6;">
                    </td>
	            </tr>
	        </table>

	        <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
	
	            <tr>
	                <td bgcolor="#ffffff" style="padding: 40px 40px 20px; text-align: center;">
	                    <h1 style="margin: 0; font-family: sans-serif; font-size: 24px; line-height: 125%; color: #47598A; font-weight: bold;">Hi ' . $user_email . ' </h1>
	                </td>
	            </tr>
	            <tr>
	                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 16px; line-height: 140%; color: #919CB9; text-align: center;">
	                    <p style="margin: 0;">
	                        <b>You have a new subscriber.</b> <br><br>
	                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
	                </td>
	            </tr>
	            <tr>
	                <td bgcolor="#ffffff" style="padding: 0 40px 40px; font-family: sans-serif; font-size: 15px; line-height: 140%; color: #555555;">
			            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto">
	                        <tr>
	                            <td style="border-radius: 3px; background: #3ee796; text-align: center;" class="button-td">
	                                <a href="http://codeytech.com/site-templates/applify/" style="background: #3ee796; border: 15px solid #3ee796; font-family: sans-serif; font-size: 13px; line-height: 110%; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
	                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff;">Explore</span>&nbsp;&nbsp;&nbsp;&nbsp;
	                                </a>
	                            </td>
	                        </tr>
	                    </table>
	                </td>
	            </tr>

	        </table>

            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px; font-family: sans-serif; color: #919CB9; font-size: 12px; line-height: 140%;">
                <tr>
                    <td style="padding: 40px 10px; width: 100%; font-family: sans-serif; font-size: 12px; line-height: 140%; text-align: center; color: #919CB9;" class="x-gmail-data-detectors">
                        <br><br>
                        Powered by codeytech.com
                        <br><br>
                    </td>
                </tr>
            </table>

            <table role="presentation" bgcolor="#709f2b" cellspacing="0" cellpadding="0" border="0" align="center" width="100%">
                <tr>
                    <td valign="top" align="center">
                    
                    </td>
                </tr>
            </table>
	    </center>
	</body>
	</html> 
';