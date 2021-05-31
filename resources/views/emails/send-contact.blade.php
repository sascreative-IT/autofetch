<!DOCTYPE html>
<html>
<head>
  <title>Email</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap?123" rel="stylesheet">

  <style type="text/css">
    * {
      margin: 0;
      border: 0;
      padding: 0;
      font-family: 'Lato', sans-serif !important;
    }
    table {
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      border: 1px solid #ebebeb;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even) {
      background-color: #f1f1f1;
    }
    .email-main {
      width: 700px;
      margin: auto;
    }
  </style>

</head>
<body>

  <div class="email-main" style="width: 700px; margin: auto;">
    <table style="width: 100%;">
        <tr>
          <td colspan="2" style="background-color: #37135f; padding: 20px 10px;">
            <img style="display: inline-block; vertical-align: middle;" src="{{ asset('assets/site/img/elogo.png')}}" width="100px">
          </td>
        </tr>
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Name</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['full_name'] }}</td>
        </tr>
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Email</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['email'] }}</td>
        </tr>
         <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Phone number</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['phone_number'] }}</td>
        </tr>
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Message</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['message'] }}</td>
        </tr>
        
        <!-- <tr>
          <td colspan="2" style="background-color: #37135f; padding: 10px 10px; text-align: center;     color: #ffffff;">
            <p>We will get back to you shortly</p>
            <p>Thanks</p>
            <p style="margin-top: 10px; font-size: 18px; font-weight: 700;">The Autofetch</p>
          </td>
        </tr>  -->
      </table>
          </div>
  </body>
  </html>