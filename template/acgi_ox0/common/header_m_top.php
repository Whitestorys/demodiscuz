<?php echo ' ';exit;?>
<!--{if $_G['uid']}-->
	<!--<a href="javascript:;" id="myitem" class="showmenu" onmouseover="showMenu({'ctrlid':'myitem'});"></a>-->
	<span class="lg_info">
			<a class="avar" href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}"><!--{avatar($_G[uid],small)}--></a>
			<div class="info" style="/*display:none;*/">
				<!--{if check_diy_perm($topic)}--><!--$diynav--><!--{/if}-->
				<a href="javascript:saveUserdata('diy_advance_mode', '1');openDiy();" title="�� DIY ���">DIY����</a>
				<a href="home.php?mod=space&uid=$_G[uid]" class="vw/my{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} qq{/if}" target="_blank" title="{lang visit_my_space}">{$_G[member][username]}</a>
				<!--{hook/global_usernav_extra1}-->
				<!--{hook/global_usernav_extra4}-->
				<a href="home.php?mod=spacecp&ac=usergroup" >$_G[group][grouptitle]</a>
				<!--<a href="home.php?mod=space&do=pm" id="pm_ntc"{if $_G[member][newpm]} class="new"{/if}>{lang pm_center}</a>-->
				<!--{if $_G['setting']['taskon'] && !empty($_G['cookie']['taskdoing_'.$_G['uid']])}--><a href="home.php?mod=task&item=doing" id="task_ntc" class="new">{lang task_doing}</a><!--{/if}-->
				<!--{if ($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))}-->
				<a href="portal.php?mod=portalcp"><!--{if $_G['setting']['portalstatus'] }-->{lang portal_manage}<!--{else}-->{lang portal_block_manage}<!--{/if}--></a>
				<!--{/if}-->
				<!--{if $_G['uid'] && $_G['group']['radminid'] > 1}--><a href="forum.php?mod=modcp&fid=$_G[fid]" target="_blank">{lang forum_manager}</a><!--{/if}-->
				<!--{if $_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']}--><a href="admin.php?frames=yes&action=cloud&operation=applist" target="_blank">{lang cloudcp}</a><!--{/if}-->
				<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}--><a href="admin.php" target="_blank">{lang admincp}</a><!--{/if}-->
				<!--{hook/global_usernav_extra3}-->
				<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: $_G[member][credits]</a>
				<!--{hook/global_usernav_extra2}-->
				<a href="home.php?mod=spacecp">�޸�����</a>
				<a href="home.php?mod=spacecp&ac=avatar">�ϴ�ͷ��</a>
				<a href="forum.php?mod=guide&view=my">�ҵ�����</a>
				<a href="home.php?mod=space&do=favorite&view=me">�ҵ��ղ�</a>
				<a href="home.php?mod=space&do=friend">�ҵĺ���</a>
				<a class="logout" href="member.php?mod=logging&action=logout&formhash={FORMHASH}">�˳���½</a>
			</div>
	</span>
	<span id="loginstatus">
		<a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onclick="ajaxget(this.href, 'loginstatus');return false;"></a>
	</span>
	<span class="acnotice">
		<a href="home.php?mod=space&do=notice" id="myprompt" class="{if $_G[member][newprompt]} new{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">��Ϣ
			<!--{if $_G[member][newprompt]}--><em>$_G[member][newprompt]</em><!--{/if}-->
		</a>
		<span id="myprompt_check"></span>
	</span>
	<span class="go-post">
		<!--{if empty($_G[fid])}-->
			<a class="button13" onclick="showWindow('nav', this.href, 'get', 0)" href="forum.php?mod=misc&action=nav">Ͷ��</a>
		<!--{else}-->
			<a href="forum.php?mod=post&action=newthread&fid=$_G[fid]" title="��ǰ���:$_G[forum][name]" initialized="true">Ͷ��</a>
		<!--{/if}-->
	</span>

<!--{elseif !empty($_G['cookie']['loginuser'])}-->
        <a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a>
        <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
        <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
<!--{elseif !$_G[connectguest]}-->
		<a class="login" href="member.php?mod=logging&action=login">��½</a><a class="sign"  href="member.php?mod={$_G[setting][regname]}">ע��</a>
		<a class="qq" href="connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple" target="_blank">QQ��½</a>
		<a class="wx" href="https://open.weixin.qq.com/connect/qrconnect?appid=wxd813c1077086880d&redirect_uri=http%3A%2F%2Fwsq.discuz.qq.com%2F%3Fcmd%3DYz1zaXRlJmE9d3hjYWxsYmFjayZ0eXBlPXFyY29ubmVjdCZzaXRlaWQ9MjY1MDk5NDg1JnNpdGV1aWQ9MCZxcnJlZmVyZXI9aHR0cCUzQSUyRiUyRjExNC4yMTUuMTA2LjEzNSUyRmRuJTJGcHglMkZwb3J0YWwucGhwJnR0PTE0MzgzMzA1NzImc2lnbmF0dXJlPTIyYTQwNDM3MjlhZmJmNDNlZTQ2ZDkzNGNlMjI1ODMwMTdmMWE0NWE%3D&response_type=code&scope=snsapi_login&state=#wechat_redirect" target="_blank">΢��ɨ��</a>
		<!--<a class="sina" href="#" target="_blank">���˵�½</a>-->
	
<!--{else}-->
		<!--{avatar(0,small)}-->
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>

		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>{lang usergroup}: $_G[group][grouptitle]

<!--{/if}-->
