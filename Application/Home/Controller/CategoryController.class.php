<?php
/**
 * Created by coder meng.
 * User: coder meng
 * Date: 2016/4/29 9:26
 */

namespace Home\Controller;

use Think\Controller;

class CategoryController extends PublicController
{
    public function index($id)
    {
        $typeobj = D('Type');
        $arr = $typeobj->type($id);
        $goodsobj = D('Goods');
        $typerows = $typeobj->indexType();
        $goods = $goodsobj->showGoods($arr);
        $hotred = $goodsobj->hotGoods($id);
        $this->assign('goods', $goods);
        $this->assign('hotred', $hotred);
        $this->assign('type', $arr);
        $this->assign('typerows', $typerows);
        $this->display('Category');
    }
}