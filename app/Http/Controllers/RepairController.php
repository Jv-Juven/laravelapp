<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repair;

class RepairController extends Controller
{
    public function __construct() {}

    // 报修页面提交表单
    public function postRepair(Request $rq) {
        // return csrf_token(); // P4awyBJYks9DmFQX29lbYI9K5aOChiI5mnVKpvIC
        // return csrf_field(); // <input type="hidden" name="_token" value="P4awyBJYks9DmFQX29lbYI9K5aOChiI5mnVKpvIC">
        $repair = new Repair;

        // return $rq->input();
        $title = $rq->input('title'); // 标题
        $category = $rq->input('category'); // 电脑问题分类
        $contactName = $rq->input('contactName'); // 联系人
        $stdNum = $rq->input('stdNum'); // 学号
        $phone = $rq->input('phone'); // 联系方式
        $address = $rq->input('address'); // 地址（宿舍号）
        $faultDate = $rq->input('faultDate'); // 报修日期
        $appointmentTime = $rq->input('appointmentTime'); // 预约时间
        $descriptions = $rq->input('descriptions'); // 问题描述
        $imagesArr = serialize($rq->input('imagesArr')); // 图片链接数组
        $fixWay = $rq->input('fixWay'); // 维修方式
        // {
        //     "title": "电脑蓝屏",
        //     "category": "蓝屏",
        //     "contactName": "林育英",
        //     "stdNum": "2015082087",
        //     "phone": "18813092782",
        //     "address": "J218",
        //     "faultDate": "2016-11-11",
        //     "appointmentTime": "2016-11-12 10:00-11:00 16:00-17:00",
        //     "descriptions": "一按下开机键，出现欢迎画面，之后就蓝屏，出现一些白色的英文字母",
        //     "imagesArr": [],
        //     "fixWay": 0,
        // }
        $repair->title = $title; // 标题
        $repair->category = $category; // 电脑问题分类
        $repair->contactName = $contactName; // 联系人
        $repair->stdNum = $stdNum; // 学号
        $repair->phone = $phone; // 联系方式
        $repair->address = $address; // 地址（宿舍号）
        $repair->faultDate = $faultDate; // 报修日期
        $repair->appointmentTime = $appointmentTime; // 预约时间
        $repair->descriptions = $descriptions; // 问题描述
        $repair->imagesArr = $imagesArr; // 图片链接数组
        $repair->fixWay = $fixWay; // 维修方式
        $repair->isReceived = false; // 是否已接单
        $repair->isDealed = false; // 是否已处理
        $repair->feedBack = ""; // 意见反馈
        $repair->save();

    }
}
