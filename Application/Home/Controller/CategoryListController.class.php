<?php
/**
 * Created by coder meng.
 * User: coder meng
 * Date: 2016/4/29 9:26
 */

namespace Home\Controller;

use Think\Controller;

class CategoryListController extends PublicController
{
    public function index($typeid)
    {
        session('typeId', $typeid);
        $type = D('Type');
        $navPath = $type->navPath($typeid);
        $brand = D('Goods');
        $brands = $brand->getBrand($typeid);
        $goods = $brand->getGoods($typeid);
        $property = D('Property');
        $goodspro = $property->getProperty($typeid);
        $goods=$this->addConllectClass($goods);
        $this->assign('typeId', $typeid);
        $this->assign('goodspro', $goodspro);
        $this->assign('Filtergoods', $goods);
        $this->assign('brand', $brands);
        $this->assign('path', $navPath);
        $this->assign('scanHistory',$_SESSION[$this->tempid]);
        $this->display('CategoryList');
    }

    public function goodsFilter()
    {
        $d = D('Goods');
        if (empty($_POST['property']) || !isset($_POST['property'])) {
            $res = $d->getGoods($_POST['typeId']);
        } else {
            $res = $d->field('id,goodsName,price,priceLower,picName')->where("CONCAT(descr,goodsName) LIKE '%{$_POST['property']}'")->select();
        }
        $res=$this->addConllectClass($res);
        $this->assign('Filtergoods', $res);
        $this->display('CategoryListChild');
    }

    public function search()
    {
        $d = D('Goods');
        $res = $d->field('id,typeId,goodsName,price,priceLower,picName')->where("descr LIKE '%{$_POST['search']}%'")->select();
        if (empty($res)) {
            $type = $d->table('type')->where("name LIKE '%{$_POST['search']}%'")->select();
            foreach ($type as $key => $val) {
                $res = $d->field('id,typeId,goodsName,price,priceLower,picName')->where("typeId={$val['id']}")->select();
            }
        }
        $brands = $d->getBrand($res[0]['typeId']);
        $property = D('Property');
        $goodspro = $property->getProperty($res[0]['typeId']);
        $res=$this->addConllectClass($res);
        $this->assign('goodspro', $goodspro);
        $this->assign('Filtergoods', $res);
        $this->assign('brand', $brands);
        $this->display('CategoryList');

    }
    public function emptyHistory()
    {
         session($this->tempid,null);
    }
    public function addCollection($id)
    {
        $d = D('Goods');
        if(!($d->table('collection')->where("goodsId=$id")->find()))
        {
            $data=$d->field('goodsName,price,picName')->find($id);
            $data['goodsId']=$id;
            $data['userId']=$_SESSION['userId'];
            $m=M('collection');
            $m->add($data);
        }
    }
    public function addConllectClass($goods)
    {
        $m=M('collection');
        $collect=$m->where("userId={$_SESSION['userId']}")->select();
        foreach($goods as $keys=>$vals)
        {
            foreach($collect as $key=>$val)
            {
                if($vals['id']==$val['goodsId'])
                {
                    $goods[$keys]['class']='conllect';
                }
            }
        }
        return $goods;
    }


}