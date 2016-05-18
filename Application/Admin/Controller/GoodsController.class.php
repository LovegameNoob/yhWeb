<?php
/**
 * Created by coder meng.
 * User: coder meng
 * Date: 2016/4/28 16:49
 */

namespace Admin\Controller;

use Think\Controller;

class GoodsController extends Controller
{
    public function add()
    {
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg', '');
        $upload->rootPath = './Public/Uploads/';
        $upload->autoSub = false;
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        } else {
            $_POST['picName'] = $info['picName']['savename'];
            $data['picName'] = $info['picName']['savename'];
            $data['picDetail'] = $info['picDetail']['savename'];
            $data['picPure'] = $info['picPure']['savename'];
        }
        $_POST['addTime'] = time();
        $m = M('goods');
        $res = $m->table('type')->find($_POST['typeId']);
        $_POST['path'] = $res['path'];
        if ($goodsId = $m->add($_POST)) {
            $img = M('goods_img');
            $data['goodsId'] = $goodsId;
            $data['typeId'] = $_POST['typeId'];
            if ($img->add($data)) {
                $this->success('新增成功', 'goodsList');
            } else {
                $this->error('新增图片失败');
            }
        } else {
            $this->error('新增失败');
        }

    }

    public function goodsList($page = 1)
    {
        $d = D('Goods');
        if ($_GET['state'] == 2) {
            $goods = $d->goodsList($page, 2);
        } elseif ($_GET['state'] == 3) {
            $goods = $d->goodsList($page, 3);
        } else {
            $goods = $d->goodsList($page);
        }
        $pagenum = $d->where("state={$_GET['state']}")->count();
        $pagenum = ceil($pagenum / 5);
        $this->assign('pagenum', $pagenum);
        $this->assign('goods', $goods);
        $this->display('goodsList');

    }

    public function addGoods()
    {
        $m = D('Type');
        $type = $m->typeAll();
        $this->assign('type', $type);
        $this->display();
    }

    public function ajaxgetProperty($typeId)
    {
        $D = D('Property');
        $res = $D->ajaxGetProperty($typeId);
        $this->ajaxReturn($res);
    }

    public function ajaxPage($page = 1, $state = 1)
    {
        $m = D('Goods');
        $goods = $m->goodsList($page, $state);
        $pagenum = $m->count();
        $pagenum = ceil($pagenum / 5);
        $this->assign('pagenum', $pagenum);
        $this->assign('goods', $goods);
        $this->display('goodsListChild');
    }

    public function addSubject()
    {
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Public/Uploads/';
        $upload->autoSub = false;
        $info = $upload->upload();
        if (!$info) {
            $this->error($upload->getError());
        } else {
            $_POST['picName'] = $info['picName']['savename'];
        }
        $_POST['addTime'] = time();
        $m = M('subject');
        if ($m->add($_POST)) {
            $this->success('新增成功', 'subject');
        } else {
            $this->error('新增失败');
        }
    }

    public function goodsImage()
    {
        $m=M('goods_img');
        $res=$m->select();
        $this->assign('goodsimage',$res);
        $this->display();
    }

    public function goodsProperty()
    {
        $m = M('property');
        $res = $m->select();
        $this->assign('property', $res);
        $this->display();
    }

    public function addProperty()
    {
        $d = D('Type');
        $type = $d->typeAll();
        $this->assign('type', $type);
        $this->display();
    }

    public function addPropertyAct()
    {
        $d = D('Property');
        if ($d->add($_POST)) {
            $this->success("新增属性成功", 'goodsProperty');
        } else {
            $this->error('新增失败');
        }
    }

    public function goodsUpdate($id)
    {
        $d = D('Type');
        $type = $d->typeAll();
        $m = M('goods');
        $goods = $m->find($id);
        $this->assign('type', $type);
        $this->assign('goods', $goods);
        $this->display();
    }

    public function goodsUpdateAct()
    {
        foreach ($_POST as $key => $val) {
            if (!empty($val)) {
                $data[$key] = $val;
            }
        }
        $data['property'] = implode(",", $data['property']);
        if (!empty($_POST['picName'])) {
            $upload = new \Think\Upload();
            $upload->maxSize = 3145728;
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
            $upload->rootPath = './Public/Uploads/';
            $upload->autoSub = false;
            $info = $upload->upload();
            if (!$info) {
                $this->error($upload->getError());
            } else {
                $data['picName'] = $info['picName']['savename'];
            }
        }
        $m = M('goods');
        if ($m->where("id={$data['id']}")->save($data)) {
            $this->success('修改成功', 'goodsList');
        } else {
            $this->error('修改失败');
        }
    }

    public function updateState($id, $state)
    {
        $m = M('Goods');
        $data['id'] = intval($id);
        $data['state'] = intval($state);
        if ($m->save($data)) {
            $this->goodsList();
        } else {
            $this->error('修改失败');
        }

    }


}