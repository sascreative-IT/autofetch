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
        @if(isset($data->first_name))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">First Name</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->first_name}}</td>
        </tr>
        @endif
        @if(isset($data->last_name))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Last Name</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->last_name}}</td>
        </tr>
          @endif
          @if(isset($data->user_email))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Email</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->user_email }}</td>
        </tr>
         @endif
          @if(isset($data->phone_number))
          <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Phone number</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->phone_number }}</td>
        </tr>
        
           @endif
           @if(isset($data->amount_borrow))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Amount Borrow</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->amount_borrow }}</td>
        </tr>
         @endif
    
       @if(isset($data->terms_borrow))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Terms Borrow</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->terms_borrow }}</td>
        </tr>
          @endif
           @if(isset($data->vehicle_make))
         <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Vehicle Make</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->vehicle_make}}</td>
        </tr>
        @endif
        @if(isset($data->vehicle_model))
          <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Vehicle Model</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->vehicle_model }}</td>
        </tr>
        @endif
        @if(isset($data->condition))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Vehicle Condition</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->condition }}</td>
        </tr>
       @endif
      </table>
          </div>
  </body>
  </html>