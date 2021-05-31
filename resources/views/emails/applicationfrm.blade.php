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
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">First Name</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['first_name'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Last Name</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['last_name'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Email</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['email'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Phone number</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['area_code'] }}-{{ $data['phone_number'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Date of birth</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['dob'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Gender</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['gender'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Driver license type</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['driver_license_type'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">License number</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['license_number'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">License version no</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['license_version_number'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Best time and phone number to contact you on?</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['best_contact_time'] }}</td>
				</tr>
				
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Occupation</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['current_employer'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Employment type</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['employment_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Income per week after tax</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['approx_earning'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">How long have you been working there?(Y-M)</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['working_year'] }}-{{ $data['working_month'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Permanent employment *</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['time_at_employer'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Marital status </td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['marital_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">No. Children you still support</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['deependents_living_at_home'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Current address </td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['street_address1'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">City</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['city'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Property status</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['property_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Time at property Year -(Y-M)</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['housing_expnses_per_week'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Credit history</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['credit_history'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Additional comments</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data['additional_comments'] }}</td>
				</tr>
			<!-- 	<tr>
					<td colspan="2" style="background-color: #37135f; padding: 10px 10px; text-align: center;     color: #ffffff;">
						<p>We will get back to you shortly</p>
						<p>Thanks</p>
						<p style="margin-top: 10px; font-size: 18px; font-weight: 700;">The Autofetch</p>
					</td>
				</tr> -->
			</table>
@if($data2['first_name'] != "")
			<table style="width: 100%;">
				<tr>
					<td colspan="2" style="background-color: #37135f; padding: 20px 10px;">
<p style="font-size: 18px; font-weight: 700; color: #ffffff;">Second Form</p>

</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">First Name</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['first_name'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Last Name</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['last_name'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Email</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['email'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Phone number</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['area_code'] }}-{{ $data2['phone_number'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Date of birth</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['dob'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Gender</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['gender'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Driver license type</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['driver_license_type'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">License number</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['license_number'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">License version no</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['license_version_number'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Best time and phone number to contact you on?</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['best_contact_time'] }}</td>
				</tr>
				
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Occupation</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['current_employer'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Employment type</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['employment_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Income per week after tax</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['approx_earning'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">How long have you been working there?(Y-M)</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['working_year'] }}-{{ $data2['working_month'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Permanent employment *</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['time_at_employer'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Marital status </td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['marital_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">No. Children you still support</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['deependents_living_at_home'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Current address </td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['street_address1'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">City</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['city'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Property status</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['property_status'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Time at property Year -(Y-M)</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['housing_expnses_per_week'] }}</td>
				</tr>
				<tr style="background-color: #f1f1f1;">
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Credit history</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['credit_history'] }}</td>
				</tr>
				<tr>
					<td style="font-weight: 600; font-size: 14px; width:40%; border: 1px solid #ebebeb; padding: 8px;">Additional comments</td>
					<td style="font-size: 14px; border: 1px solid #ebebeb; padding: 8px;">{{ $data2['additional_comments'] }}</td>
				</tr>
			<!-- 	<tr>
					<td colspan="2" style="background-color: #37135f; padding: 10px 10px; text-align: center;     color: #ffffff;">
						<p>We will get back to you shortly</p>
						<p>Thanks</p>
						<p style="margin-top: 10px; font-size: 18px; font-weight: 700;">The Autofetch</p>
					</td>
				</tr> -->
			</table>
			@endif
		</div>


	</body>
	</html>