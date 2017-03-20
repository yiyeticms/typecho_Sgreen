<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function get_post_view($archive)
{
    $cid    = $archive->cid;
    $db     = Typecho_Db::get();
    $prefix = $db->getPrefix();
    if (!array_key_exists('views', $db->fetchRow($db->select()->from('table.contents')))) {
        $db->query('ALTER TABLE `' . $prefix . 'contents` ADD `views` INT(10) DEFAULT 0;');
        echo 0;
        return;
    }
    $row = $db->fetchRow($db->select('views')->from('table.contents')->where('cid = ?', $cid));
    if ($archive->is('single')) {
 $views = Typecho_Cookie::get('extend_contents_views');
        if(empty($views)){
            $views = array();
        }else{
            $views = explode(',', $views);
        }
if(!in_array($cid,$views)){
       $db->query($db->update('table.contents')->rows(array('views' => (int) $row['views'] + 1))->where('cid = ?', $cid));
array_push($views, $cid);
            $views = implode(',', $views);
            Typecho_Cookie::set('extend_contents_views', $views); //记录查看cookie
        }
    }
    echo $row['views'];
}
function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('你的头像地址【必填】'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个自己的头像'));
    $form->addInput($logoUrl); 
	
    $ico = new Typecho_Widget_Helper_Form_Element_Text('ico', NULL, NULL, _t('你的ico图标地址【必填】'), _t('在这里填入你的ICO图标地址，若没有你可以自行制作ico图标后放到站点根目录，在此处填入链接即可'));
    $form->addInput($ico);

    $qqlink = new Typecho_Widget_Helper_Form_Element_Text('qqlink', NULL, NULL, _t('你的QQ联系地址'), _t('在这里填入QQ联系地址，不知道请到QQ推广里获取代码，其格式为（http://wpa.qq.com/msgrd?v=3&uin=你的QQ号&site=qq&menu=yes）'));
	$form->addInput($qqlink);
	
    $mlink = new Typecho_Widget_Helper_Form_Element_Text('mlink', NULL, NULL, _t('你的联系邮箱'), _t('在这里填入你的邮箱联系地址,其格式为（mailto:admin@yiyeti.cc）'));
    $form->addInput($mlink);
	
    $wlink = new Typecho_Widget_Helper_Form_Element_Text('wlink', NULL, NULL, _t('你的联系微博'), _t('在这里填入你的微博联系地址'));
    $form->addInput($wlink);
	
    $glink = new Typecho_Widget_Helper_Form_Element_Text('glink', NULL, NULL, _t('你的github库'), _t('在这里填入你的github库地址'));
    $form->addInput($glink);

    $qzlink = new Typecho_Widget_Helper_Form_Element_Text('qzlink', NULL, NULL, _t('你的QQ空间'), _t('在这里填入你的QQ空间地址'));
    $form->addInput($qzlink);
	
	$zddt = new Typecho_Widget_Helper_Form_Element_Text('zddt', NULL, NULL, _t('你的站点地图'), _t('在这里填入你的站点地图地址，若没有；请使用相关工具或插件生成'));
    $form->addInput($zddt);
	
	$wzdt = new Typecho_Widget_Helper_Form_Element_Text('wzdt', NULL, NULL, _t('你的网站地图'), _t('在这里填入你的网站地图地址，若没有；请使用相关工具或插件生成'));
    $form->addInput($wzdt);
	
	$music = new Typecho_Widget_Helper_Form_Element_Textarea('music', NULL, NULL, _t('在这里填入你的音乐链接【必填】'), _t('<br><h4 style="margin-bottom:5px;margin-top:12px;">添加网易云音乐(需主机支持curl扩展)</h4><div style="background-color:#467b96;padding:5px 10px;max-width:109px;border-radius: 2px;"><a href="'.Helper::options()->themeUrl.'/Music.php" target="_blank" style="font-size:14px;color:#fff;outline:none;text-decoration:none;">网易云音乐id解析</a>
        	</div><p style="font-size: .92857em;color: #999; margin-top: 4px; margin-bottom:15px;">请自行去网易云音乐网页版获取音乐id(具体在每个音乐项目的网址最后会有个id)。<b style="color: #888;">将解析出的音乐链接复制到上面歌曲列表里(注意检查与现有歌曲是否用英文,隔开)。单曲解析不支持国外的服务器(国外ip)! 有版权的音乐无法解析!</b></p>'));
    $form->addInput($music);
	
	$zdbf = new Typecho_Widget_Helper_Form_Element_Text('zdbf', NULL, NULL, _t('音乐是否自动播放【必填】'), _t('在这里填写1或0来控制音乐是否自动播放，1为自动播放、0为不自动播放'));
    $form->addInput($zdbf);
}