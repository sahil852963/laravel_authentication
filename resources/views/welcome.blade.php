@extends('layouts.app')
@section('content')
<center><h1>Welcome to Laravel Application </h1></center> 
{{-- <a href="{{route('login')}}">login here</a><br>
<a href="{{route('register')}}">register here</a> --}}
<html>
  {{-- <head> --}}
    {{-- <style type="text/css">
      body
      {
        background-color: #e4e2e287;
        text-align: center;
        color: #58585b;
      }
      .tbl1
      {
        width: 600px; 
        padding: 56px 81px; 
        margin: auto; 
        margin-top: 22px; 
        background-color: #fff; 
      }
      </style> --}}
  {{-- </head> --}}
  <body>
    <center>
        <table border="0" cellpadding="0" cellspacing="0" class="tbl1">
            <tr style="vertical-align: middle;">
                <td colspan="2" style="width: 100%;text-align: center">
                    <span style="color:#03386F;font-size:50px;">Rudra Innovative Software</span>
                </td>
            </tr>
          
            <tr>
                <td style="width: 100%; height:36px"></td>
            </tr>
          
            <tr style="text-align: center;">
                <td colspan="2">
                    <span  style="font-size: 35px; font-weight: 100; line-height: 20px; margin: 0px;font-family: helvetica, arial, sans-serif;">Welcome</span>
                </td>
            </tr>
              <tr>
                <td style="width: 100%; height:24px"></td>
              </tr>
            <tr style="text-align: center;">
                <td colspan="2" style="height:62px; margin:0px;">
                      <p style="font-size: 16px; line-height: 20px; margin:0px;">
                        <span style="font-family: helvetica, arial, sans-serif; font-weight: bolder; color:#FFC000;font-size: 21px; font-weight: 100; line-height: 48px; margin: 0px;">Software Development Company</span> 
                        <br>  
                        <span  style="font-size: 19px; font-weight: 100; line-height: 30px; margin: 0px;font-family: helvetica, arial, sans-serif; color: #03386F;">Provinding its services in IT field from 2010 </span><br>          
                    </p>
                </td>
            </tr>
         
              <tr>
                <td style="width: 100%; height:48px"></td>
              </tr>
             <tr style="text-align: center;">
                <td colspan="2">
                      <p style="font-size: 12px; line-height: 20px; margin: 0px;">
                        <span style="font-family: helvetica, arial, sans-serif;">
                          Need help?<a href="#" style="color: #049fd9; text-decoration: none;" rel="noopener noreferrer">&nbsp;Contact support</a>.
                        </span>
                      </p>
                </td>
            </tr>
            <tr>
                <td style="width: 100%; height:48px"></td>
            </tr>
          
              <tr style="vertical-align: middle;">
                <td colspan="2">
                      <p style="font-size: 11px; color: #7F7F86;font-family: helvetica, arial, sans-serif;line-height: 15px; width:520px; text-align: left;">  Copyright © 2020 Rudra, Inc. All rights reserved. LearnVern is a training portal where anyone can learn any course in vernacular languages for free. <br> Support Center: +91-8849004643 or email us at info@rudra.com.
                      </p>
                </td>
          </tr>
            
        </table>
  </center>
    
    <div style="margin: auto;width: 680px; background: rgb(2,0,36);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);height: 0.5vh;">
    </div>
  </body>
</html>
@endsection