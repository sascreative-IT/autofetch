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
        @if(isset($data->name_of_applicant ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">First Name</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->name_of_applicant }}</td>
        </tr>
        @endif
         @if(isset($data->last_name ))
           <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Last Name</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->last_name  }}</td>
        </tr>
         @endif
           @if(isset($data->email_of_applicant ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Email</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->email_of_applicant}}</td>
        </tr>
            @endif
             @if(isset($data->phone_number ))
          <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Phone number</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->phone_number }}</td>
        </tr>
        @endif
         @if(isset($data->location_name ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Location</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->location_name }}</td>
        </tr>
          @endif
   
      
         
           @if(isset($data->transmission_type ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Transmission Type</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->transmission_type }}</td>
        </tr>
          @endif
          @if(isset($data->fuel_type ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Fuel Type</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->fuel_type }}</td>
        </tr>
          @endif
          @if(isset($data->life_style ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">life Style</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->life_style }}</td>
        </tr>
          @endif
          @if(isset($data->color ))
        <tr style="background-color: #f1f1f1;">
          <td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Color</td>
          <td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data->color }}</td>
        </tr>
          @endif
        
       
      </table>
          </div>
  </body>
  </html>