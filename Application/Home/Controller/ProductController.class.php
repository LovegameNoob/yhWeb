<?php
/**
 * Created by coder meng.
 * User: coder meng
 * Date: 2016/5/7 14:07
 */

namespace Home\Controller;

use Think\Controller;

class ProductController extends PublicController
{

    public function index($id)
    {
        $typeobj = D('Type');
        $typerows = $typeobj->indexType();
        $goodsobj = D('Goods');
        $goodsobj->updateClick($id);
        $scangoods=$goodsobj->field("id,goodsName,price,picName")->find($id);
        if(empty($_SESSION[$this->tempid]))
        {
            $_SESSION[$this->tempid][0]=$scangoods;
        }
        else
        {
            foreach($_SESSION[$this->tempid] as $key=>$val)
            {
                if($val['id']==$id)
                {
                    $isarray=true;
                    break;
                }
            }
            if(!$isarray)
            {
                $_SESSION[$this->tempid][]=$scangoods;
            }
        }
        $goodsdetail = $goodsobj->getGoodsDetail($id);
        $this->assign('typerows', $typerows);
        $this->assign('goodsdetail', $goodsdetail);
        $this->display('Product');
    }
    public function getProperty($goodsid)
    {
        $m = M('goods');
        $goods = $m->find($goodsid);
        $arr = explode(",", $goods['property']);
        foreach ($arr as $key => $val) {
            $res = explode(":", $val);
            $m = M('property');
            $result = $m->find($res[0]);
            $value = explode(",", $result['propertyValue']);
            $property[$key]['propertyName'] = $result['propertyName'];
            $property[$key]['propertyValue'] = $value[$res[1]];
        }

    }

}