<?php
/* |------------------------------------------------------
 * | 读者管理模型
 * |------------------------------------------------------
 * */
namespace app\system\model;
use think\Model;

class Readers extends Model
{
    protected $table = 'reader';
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
    protected $deleteTime='deleted_at';
    protected $autoWriteTimestamp = true;
}