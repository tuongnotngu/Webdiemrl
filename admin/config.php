<?php
date_default_timezone_set("Asia/Bangkok"); 
//Tên kỳ thi
$contestName = "THPT Chuyen Quoc Hoc Training Camp";
//"CSP Olympiad in Informatics"; 
//Mô tả kỳ thi
$description = "<a href = './tools/'>Các IDE và bộ dịch.</a>";
//footer
$footer = "Keep typing, keep loving";
//Thư mục chưa đề (định dạng pdf, jpg hoặc zip)
$problemsDir = "contests/problems";
//Tên file đề tổng hợp
$problemsFile = "";
//Thư mục chứa test
$examTestDir = "contests/tests";
//Tên file test tổng hợp
$examTestFile = "Full.contest";
//Thư mục lưu bài làm trực tuyến của học sinh
//H:\ONLINE\TIN HOC 11\KIEUTEP\Bailam
//$uploadDir = "H:/bailam/";//H:/xampp/htdocs/laptrinh/BAINOP/
$uploadDir = "H:/xampp/htdocs/laptrinh/BAINOP/";
//Thư mục chứa file logs
//$logsDir = "H:/bailam/Logs/";
//$logssubDir = "H:/bailam/Logs/";
$logsDir = "H:/xampp/htdocs/laptrinh/BAINOP/Logs/";
$logssubDir = "H:/xampp/htdocs/laptrinh/BAINOP/Logs/";
$startTime = date_create("2016-04-15 8:30:00",timezone_open("Asia/Bangkok")); //YYYY-MM-DD HH:MM:SS
//Thời gian bắt đầu kỳ thi (định dạng HH, MM, SS, MM, DD, YYYY)
$begintime = mktime(15, 37, 0, 10, 05, 2017);
//Thời gian làm bài - (đặt 0: không giới hạn)
$duringTime = 0; //(phút)
//1: Công bố kết quả sau khi chấm, 0: không công bố.
$publish = 1;	
?>