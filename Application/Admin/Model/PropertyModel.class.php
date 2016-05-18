<?php
/**
 * Created by coder meng.
 * User: coder meng
 * Date: 2016/5/7 15:36
 */

namespace Admin\Model;

use Think\Model;

class PropertyModel extends Model
{
    protected $tableName = 'property';

    public function ajaxGetProperty($typeid)
    {
        $arr = $this->where("typeId=$typeid")->select();
        if (empty($arr)) {
            $type = $this->table('type')->where("id=$typeid")->find();
            $arr = $this->where("typeId={$type['pid']}")->select();
        }
        foreach ($arr as $keys => $vals) {
            $proValue = explode(',', $vals['propertyValue']);
            $property[$keys] = $vals['propertyName'];
            $property[$keys] .= "<select name='property[]'>";
            foreach ($proValue as $key => $val) {
                $property[$keys] .= "<option value='{$vals['id']}:$key'>$val</option>";
            }
            $property[$keys] .= "</select>";
        }

        return $property;
    }
}