<?php
/* |------------------------------------------------------
 * | 读者最近阅读管理模型
 * |------------------------------------------------------
 * */
namespace app\system\model;
use think\Model;

class Readerreadlast extends Model
{
    protected $table = 'reader_readlast';
    protected $createTime = 'created_at';
    protected $updateTime = 'updated_at';
    protected $autoWriteTimestamp = true;
    protected $type = [
        'read_at'  =>  'timestamp'
    ];
}