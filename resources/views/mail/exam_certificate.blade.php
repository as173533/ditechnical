<!-------------------exam-certificate----------------->
<div class="container" style="width: 100%; height: auto; background-color: #FEFDDF; border: 3px solid #2A1772; border-radius: 15px; background-image: url(https://bct.tekbazaar.in/public/frontend/images/bg.png); background-position: center center; background-size: cover; background-repeat: no-repeat;" >

<table style="width: 100%; padding-top: 0px !important;">
	<tbody>
     <tr style="margin: 0px !important;">
      <td style="text-align: left !important;">
		<img src="{{$qrcode}}" alt="" style="width: 132.28px; height: 132.28px; margin-top: 10px !important;">
	  </td>
       <td style="text-align: center !important;">
		<img src="{{URL::asset('public/frontend/images/3logo.png')}}" alt="">
	  </td>
       <td style="text-align: right !important;">
		<img src="{{($assigncourse->user->image!='')? URL::asset('public/uploads/user').'/'.$assigncourse->user->image:URL::asset('public/frontend/images/profile.jpg') }}" alt="" style="width: 114px; height: 132.28px; margin-top: 10px !important;">
	  </td>
     </tr>
    </tbody> 
</table>
<h1 style="text-align: center; color: #757336; font-size: 55px; padding: 0px !important; margin: 0px 0px 0px 0px !important;">
    Di Technical <span style="font-size: 15px;">Pvt. Ltd</span>
</h1>
<h2 style="font-style: italic !important; text-align: center; color: #000; font-size: 20px; padding: 0px !important; margin: 0px 0px 0px 0px !important; ">(Institute Of Computer Education Center)</h2>
<h2 style="font-style: italic !important; text-align: center; color: #000; font-size: 20px; padding: 0px !important; margin: 0px 0px 0px 0px !important; ">Dhurwa Bus Stand Ranchi, Jharkhand</h2>
<h2 style="text-align: center; color: #4398B5; font-size: 15px; padding: 0px !important; margin: 0px 0px 0px 0px !important; ">Certificate Verification: www.ditechnical.in/certificate-verification</h2>

<table style="width: 100%; padding-top: 0px !important;">
	<tbody>
     <tr style="margin: 0px !important;">
      <td style="text-align: Center !important;">
		<img src="{{URL::asset('public/frontend/images/certificated-img.png')}}" alt="">
	  </td>
     </tr>
    </tbody> 
</table>

<h2 style="font-style: italic !important; text-align: left; color: #000; font-size: 30px; font-weight: bold; padding: 0px 0px 0px 10px !important; margin: 0px 0px 0px 0px !important; ">Awards This Certificate Of DCA</h2>
<table style="width: 100%; padding-top: 0px !important;">
	<tbody>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">To,</td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Registration No <span style="padding-left: 0px !important;">:</span> <span>DITECH/0003</span></td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Enrollment No <span style="padding-left: 6px !important;">:</span> <span>{{$assigncourse->enrollment_id}}</span></td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Mr./Mrs./Miss <span style="padding-left: 10px !important;">:</span> <span>{{$assigncourse->user->full_name}}</span></td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Father's Name <span style="padding-left: 10px !important;">:</span> <span>{{$assigncourse->user->gurdian_name}}</span></td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Mother's Name <span style="padding-left: 4px !important;">:</span> <span>{{$assigncourse->user->gurdian_name}}</span></td>
     </tr>
     <tr style="margin: 0px 0px 0px 10px !important;">
      <td style="color: #000; font-size: 20px; font-weight: 400; padding: 0px 0px 0px 10px !important;">Grade <span style="padding-left: 80px !important;">:</span> <span>
          @if(($model->theory+$model->practical+$model->viva)>60)
           A+
           @elseif(($model->theory+$model->practical+$model->viva)>=45 && ($model->theory+$model->practical+$model->viva)<=60)
           A
           @else
           B+
           @endif
          </span></td>
     </tr>
    </tbody> 
</table>
<?php
    $purchase_date = $assigncourse->created_at;
    $futureDate = date('Y-m-d', strtotime($purchase_date . '+' . $assigncourse->course->time . 'days'));
?>
<h2 style="text-align: left; color: #2A1772; font-weight: 400; font-size: 20px; padding: 0px 0px 0px 10px !important; margin: 0px 0px 0px 0px !important;">Having successfully qualified all the theory and practical modules of the DI TECHNICAL Pvt. Ltd.</h2>


<p style="padding: 0px 0px 0px 10px !important; font-size:20px; font-style: italic !important;">Has been awarded <span class="underline-1" style="border-bottom: 1px solid #000; width: 76%; display: inline-block; text-align: center;">DCA(Diploma In Computer Science)</span></p>
<p style="padding: 0px 0px 0px 10px !important; font-size:20px; font-style: italic !important;">Course In <span class="underline-1" style="border-bottom: 1px solid #000; width: 85%; display: inline-block; text-align: center;">{{$assigncourse->course->name}}</span></p>
<p style="padding: 0px 0px 0px 10px !important; font-size:20px; font-style: italic !important;">having completed the curriculum from <span class="underline-1" style="border-bottom: 1px solid #000; width: 45%; display: inline-block; text-align: center;">RANCHI</span> center</p>
<p style="padding: 0px 0px 0px 10px !important; font-size:20px; font-style: italic !important;">with Grade <span class="underline-1" style="border-bottom: 1px solid #000; width: 18%; display: inline-block; text-align: center;">
       @if(($model->theory+$model->practical+$model->viva)>60)
       A+
       @elseif(($model->theory+$model->practical+$model->viva)>=45 && ($model->theory+$model->practical+$model->viva)<=60)
       A
       @else
       B+
       @endif
    </span> and <span class="underline-1" style="border-bottom: 1px solid #000; width: 18%; display: inline-block; text-align: center;">{{$assigncourse->course->time}}</span> contact days and course duration</p>
<p style="padding: 0px 0px 0px 10px !important; font-size:20px; font-style: italic !important;"><span class="underline-1" style="border-bottom: 1px solid #000; width: 15%; display: inline-block; text-align: center;">{{(!empty($assigncourse->created_at)) ? \Carbon\Carbon::parse($assigncourse->created_at)->format('d/m/Y') : 'Not Given'}}</span> to <span class="underline-1" style="border-bottom: 1px solid #000; width: 25%; display: inline-block; text-align: center;">{{(!empty($futureDate)) ? \Carbon\Carbon::parse($futureDate)->format('d/m/Y') : 'Not Given'}}</span>.</p>
<table style="width: 100%; overflow-x:auto; padding: 0px !important;">
		<tbody>
			<tr>
				<td style="text-align: center!important;">
					<img src="{{URL::asset('public/frontend/images/Center.png')}}" alt="" style="width: 85px; height: 85px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">
				</td>
				<td style="text-align: center!important;">
					<img src="{{URL::asset('public/frontend/images/Alka.png')}}" alt="" style="width: 142px; height: 28px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">
				</td>
				<td style="text-align: center!important;">
					<img src="{{URL::asset('public/frontend/images/dir.png')}}" alt="" style="width: 200px; height: 66px; margin: 0px 0px 0px 0px !important; padding: 0px 0px 0px 0px !important;">
				</td>
			</tr>
			<tr>
				<td>
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Center Incharge</p>
				</td>
				<td>
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Controller Of Examination</p>
				</td>
				<td>
					<p style="text-align: center!important; font-weight: bold; padding: 0px 0px 0px 0px !important; margin: 0px 0px 0px 0px !important; font-size: 18px; color: #2A1772; font-style: italic !important;">Document Certificate By Director<br>(ANIL KUMAR)</p>
				</td>
			</tr>
			
		</tbody>
	</table>
</div> 
<!-------------------//exam-certificate----------------->
