<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function get_post_view($archive)
{
    $cid    = $archive->

cid;
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
            Typecho_Cookie::set('extend_contents_views', $views); 
        }
    }
    echo $row['views'];
}
function themeConfig($form) {

	$Abstract= new Typecho_Widget_Helper_Form_Element_Radio('Abstract',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用自动摘要'), _t('默认禁止，默认显示全文，在发布文章时请使用“摘要分割线”工具；启用则自动获取摘要'));

    $form->addInput($Abstract);

	$search= new Typecho_Widget_Helper_Form_Element_Radio('search',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用搜索功能'), _t('默认禁止，启用则会在头部添加搜索框'));
    $form->addInput($search);

    $Title= new Typecho_Widget_Helper_Form_Element_Radio('Title',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用动态博客标题'), _t('默认禁止，启用博客title则会动起来'));
    $form->addInput($Title);

	$Music= new Typecho_Widget_Helper_Form_Element_Radio('Music',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用音乐播放器'), _t('默认禁止，启用则会在侧边显示音乐播放器'));
    $form->addInput($Music);

	$Webdt= new Typecho_Widget_Helper_Form_Element_Radio('Webdt',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用网站地图'), _t('默认禁止，启用则会在底部增加网站地图显示'));
    $form->addInput($Webdt);

	$Idc= new Typecho_Widget_Helper_Form_Element_Radio('Idc',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用备案许可证号'), _t('默认禁止，启用则会在底部增加备案许可证号显示'));
    $form->addInput($Idc);

	$Zoom= new Typecho_Widget_Helper_Form_Element_Radio('Zoom',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用灯箱功能'), _t('默认禁止，启用则会在文章或页面加载灯箱效果'));
    $form->addInput($Zoom);

    $Lazyload= new Typecho_Widget_Helper_Form_Element_Radio('Lazyload',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用图片懒加载'), _t('默认禁止，启用则会使用图片懒加载功能'));
    $form->addInput($Lazyload);

	$Prism= new Typecho_Widget_Helper_Form_Element_Radio('Prism',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用代码高亮'), _t('默认禁止，启用则会在文章或页面加载代码高亮效果'));
    $form->addInput($Prism);

	$baiduJavaScript= new Typecho_Widget_Helper_Form_Element_Radio('baiduJavaScript',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否调用百度js库'), _t('默认禁止，启用则会调用百度js库加速网站，注意：启用HTTPS的童鞋请禁止此选项'));
    $form->addInput($baiduJavaScript);

	$Copyright= new Typecho_Widget_Helper_Form_Element_Radio('Copyright',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用版权保护功能'), _t('默认禁止，启用则别人在复制你的博文时会自动显示版权所有者'));
    $form->addInput($Copyright);

	$Gress= new Typecho_Widget_Helper_Form_Element_Radio('Gress',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用加载动画'), _t('默认禁止，启用则在顶部显示加载动画'));
    $form->addInput($Gress);

	$Reward= new Typecho_Widget_Helper_Form_Element_Radio('Reward',
        array('able' => _t('启用'),
            'disable' => _t('禁止'),
        ),
        'disable', _t('是否启用文章打赏'), _t('默认禁止，启用则在文章页面显示打赏按钮'));
    $form->addInput($Reward);

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


        $wzdsw = new Typecho_Widget_Helper_Form_Element_Text('wzdsw', NULL, NULL, _t('你的打赏文案'), _t('在这里填入你的文章打赏文案，默认显示在打赏按钮上方'));
    $form->addInput($wzdsw);


        $wechat = new Typecho_Widget_Helper_Form_Element_Text('wechat', NULL, NULL, _t('你的微信链接'), _t('在这里填入你的微信打赏链接，默认显示在打赏按钮下方'));
    $form->addInput($wechat);

        $zhifubao = new Typecho_Widget_Helper_Form_Element_Text('zhifubao', NULL, NULL, _t('你的支付宝链接'), _t('在这里填入你的支付宝打赏链接，默认显示在打赏按钮下方'));
    $form->addInput($zhifubao);

	$idc= new Typecho_Widget_Helper_Form_Element_Text('idc', NULL, NULL, _t('你的备案许可证号'), _t('在这里填入你的备案许可证号，若没有；请忽略或及时备案'));
    $form->addInput($idc);

        $zdtj = new Typecho_Widget_Helper_Form_Element_Textarea('zdtj', NULL, NULL, _t('你的统计代码'), _t('在这里填入你的站点统计代码，默认显示在head区域'));
    $form->addInput($zdtj);
	
	$music = new Typecho_Widget_Helper_Form_Element_Textarea('music', NULL, NULL, _t('在这里填入你的音乐链接【必填】'), _t('<br>
<h4 style="margin-bottom:5px;margin-top:12px;">添加网易云音乐(需主机支持curl扩展)</h4>
<div style="background-color:#467b96;padding:5px 10px;max-width:109px;border-radius: 2px;"><a href="'.Helper::options()->themeUrl.'/Music.php" target="_blank" style="font-size:14px;color:#fff;outline:none;text-decoration:none;">网易云音乐id解析</a> </div>
<p style="font-size: .92857em;color: #999; margin-top: 4px; margin-bottom:15px;">请自行去网易云音乐网页版获取音乐id(具体在每个音乐项目的网址最后会有个id)。<b style="color: #888;">将解析出的音乐链接复制到上面歌曲列表里(注意检查与现有歌曲是否用英文,隔开)。单曲解析不支持国外的服务器(国外ip)! 有版权的音乐无法解析!</b></p>
'));
    $form->addInput($music);
	
	$zdbf = new Typecho_Widget_Helper_Form_Element_Text('zdbf', NULL, NULL, _t('音乐是否自动播放【必填】'), _t('在这里填写1或0来控制音乐是否自动播放，1为自动播放、0为不自动播放'));
    $form->addInput($zdbf);

} 