<!-- $Id: cut_info.htm 16992 2010-01-19 08:45:49Z wangleisvn $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js,../js/utils.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'selectzone_bd.js')); ?>
<div class="main-div">
<form method="post" action="cut.php" name="theForm" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">

  <tr>
    <td align="right"><?php echo $this->_var['lang']['button_search']; ?><?php echo $this->_var['lang']['goods_name']; ?></td>
    <td><input name="keyword" type="text" id="keyword">
      <input name="search" type="button" id="search" value="<?php echo $this->_var['lang']['button_search']; ?>" class="button" onclick="searchGoods()" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['goods_name']; ?></td>
    <td><select name="goods_id" id="goods_id" onchange="javascript:change_good_products();">
      <option value="<?php echo $this->_var['cut']['goods_id']; ?>" selected="selected"><?php echo $this->_var['cut']['goods_name']; ?></option>
    </select>
    <select name="product_id" style="display:none">
        <?php echo $this->html_options(array('options'=>$this->_var['good_products_select'],'selected'=>$this->_var['cut']['product_id'])); ?>
        </select></td>
  </tr>

  <tr>
    <td class="label">活动名称</td>
    <td><input type="text" name="cut_name" maxlength="60" size="60" value="<?php echo $this->_var['cut']['cut_name']; ?>" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">显示在前台页面,分享到微信朋友圈或好友时也显示标题，例如可使用【全名砍价】+商品名称</span></td>
  </tr>

  <tr>
    <td class="label"><?php echo $this->_var['lang']['start_time']; ?></td>
    <td>
      <input type="text" name="start_time" maxlength="60" size="40" value="<?php echo $this->_var['cut']['start_time']; ?>" readonly="readonly" id="start_time_id" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('start_time_id', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <?php echo $this->_var['lang']['require_field']; ?>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['end_time']; ?></td>
    <td>
      <input type="text" name="end_time" maxlength="60" size="40" value="<?php echo $this->_var['cut']['end_time']; ?>"  readonly="readonly" id ="end_time_id" />
      <input name="selbtn1" type="button" id="selbtn1" onclick="return showCalendar('end_time_id', '%Y-%m-%d %H:%M', '24', false, 'selbtn1');" value="<?php echo $this->_var['lang']['btn_select']; ?>" class="button"/>
      <?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">商品价格</td>
    <td><input type="text" name="price" value="<?php echo empty($this->_var['cut']['price']) ? '0' : $this->_var['cut']['price']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">商品价格，即砍价前的价格。</span></td>
  </tr>
  <tr>
    <td style="text-align:right; font-weight:bold">市场价：</td>
    <td><input name="market_price" type="text"  value="<?php echo empty($this->_var['cut']['market_price']) ? '0' : $this->_var['cut']['market_price']; ?>" size="30"><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <!--tr>
    <td style="text-align:right; font-weight:bold">虚拟销量基数：</td>
    <td><input type="text" name="virtual_sold" value="<?php echo empty($this->_var['cut']['virtual_sold']) ? '0' : $this->_var['cut']['virtual_sold']; ?>" size="30" />
    <br /><span class="notice-span">前台显示的销量为：虚拟销量+实际销量</span></td>
  </tr-->
  <tr>
    <td class="label"><a href="javascript:showNotice('noticeminPrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['min_price']; ?></td>
    <td><input type="text" name="start_price" maxlength="60" size="20" value="<?php echo $this->_var['cut']['start_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeminPrice"><?php echo $this->_var['lang']['notice_min_price']; ?></span></td>
  </tr>
   <tr>
    <td class="label"><a href="javascript:showNotice('noticemaxPrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['max_price']; ?></td>
    <td><input type="text" name="end_price" maxlength="60" size="20" value="<?php echo $this->_var['cut']['end_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticemaxPrice"><?php echo $this->_var['lang']['notice_max_price']; ?></span></td>
  </tr>


  <tr>
    <td class="label"><a href="javascript:showNotice('noticePrice');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['price']; ?></td>
    <td><input type="text" name="max_price" maxlength="60" size="20" value="<?php echo $this->_var['cut']['max_price']; ?>" /><?php echo $this->_var['lang']['require_field']; ?><br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticePrice"><?php echo $this->_var['lang']['notice_price']; ?>。即用户最低只能砍到此价格。</span></td>
  </tr>

  <tr>
     <td class="narrow-label">是否显示保底价格</td>
      <td>
        <input type="radio" name="showlimit" value="1" <?php if ($this->_var['cut']['showlimit'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="showlimit" value="0" <?php if ($this->_var['cut']['showlimit'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
    <td class="label">商品分成</td>
    <td><input type="text" name="fencheng" value="<?php echo empty($this->_var['cut']['fencheng']) ? '0' : $this->_var['cut']['fencheng']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">商品分成不能高于保底价格。</span></td>
  </tr>
  <tr>
    <td class="label">最高购买价格</td>
    <td><input type="text" name="max_buy_price" value="<?php echo empty($this->_var['cut']['max_buy_price']) ? '-1' : $this->_var['cut']['max_buy_price']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">用户必须砍价到该价格或低于该价格才能下单。 注意：此价格必须不低于保底价格。-1为不限制。</span></td>
  </tr>
  <tr>
     <td class="narrow-label">是否显示最高购买价格</td>
      <td>
        <input type="radio" name="show_max_buy_price" value="1" <?php if ($this->_var['cut']['show_max_buy_price'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="show_max_buy_price" value="0" <?php if ($this->_var['cut']['show_max_buy_price'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
    <td class="label">砍价限时</td>
    <td><input type="text" name="cut_time_limit" value="<?php echo empty($this->_var['cut']['cut_time_limit']) ? '48' : $this->_var['cut']['cut_time_limit']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">小时制，支持小数点，建议整数。超过限定小时后，则不能再进行砍价</span></td>
  </tr>
  <tr>
    <td class="label">购买限时</td>
    <td><input type="text" name="buy_time_limit" value="<?php echo empty($this->_var['cut']['buy_time_limit']) ? '96' : $this->_var['cut']['buy_time_limit']; ?>" size="30" /><?php echo $this->_var['lang']['require_field']; ?>
    <br /><span class="notice-span">小时制，支持小数点，建议整数。超过限定小时后，则不能再以砍后价格进行下单购买。此数值请不要低于砍价限时数值。</span></td>
  </tr>
  <tr>
    <td class="label">每位客户参与本活动的次数</td>
    <td><input type="text" name="join_limit" value="<?php echo empty($this->_var['cut']['join_limit']) ? '1' : $this->_var['cut']['join_limit']; ?>" size="20" />
        <br /><span class="notice-span">每位客户参与本活动的次数。0表示不限制</span></td>
  </tr>
  <tr>
    <td class="label">每位客户每次参与允许下单的次数</td>
    <td><input type="text" name="orders_limit" value="<?php echo $this->_var['cut']['orders_limit']; ?>" size="20" />
        <br /><span class="notice-span">每位客户可以参与活动XXX次，这里定义的是每次参与，可以下单购买的次数。0表示不限制</span></td>
  </tr>
  <tr>
    <td class="label">每位客户允许对本活动进行砍价的次数</td>
    <td><input type="text" name="cut_times_limit" value="<?php echo empty($this->_var['cut']['cut_times_limit']) ? '0' : $this->_var['cut']['cut_times_limit']; ?>" size="20" />
        <br /><span class="notice-span">活动期间，对本活动进行砍价的次数。0表示不限制。 注意：这里是活动砍价次数。 
        <br />即不管活动发起者是谁，所能砍价的总次数。对于每一个发起者，一位客户只能帮砍一次。</span></td>
  </tr>
  <tr>
     <td class="narrow-label">微信未关注用户是否弹出引导关注图片二维码</td>
      <td>
        <input type="radio" name="need_follow" value="1" <?php if ($this->_var['cut']['need_follow'] == 1): ?>checked<?php endif; ?>> 是
        <input type="radio" name="need_follow" value="0" <?php if ($this->_var['cut']['need_follow'] == 0): ?>checked<?php endif; ?>> 否
      </td>
  </tr>
  <tr>
    <td class="label">分享标题</td>
    <td><input type="text" name="share_title" maxlength="60" size="60" value="<?php echo $this->_var['cut']['share_title']; ?>" />
    <br /><span class="notice-span">用于分享到微信朋友圈或者微信好友时显示，不设置默认使用活动名称</span></td>
  </tr>
  <tr>
    <td class="label">分享描述</td>
    <td><input type="text" name="share_brief" maxlength="60" size="60" value="<?php echo $this->_var['cut']['share_brief']; ?>" />
    <br /><span class="notice-span">用于分享给微信好友时显示，不设置默认使用活动名称</span></td>
  </tr>
  <tr>
    <td class="label">分享图片URL</td>
    <td><input type="text" name="share_img"  size="60" value="<?php echo $this->_var['cut']['share_img']; ?>" />
    <br /><span class="notice-span">用于微信分享时显示，不设置默认使用商品主图（URL是绝对地址，请使用http开头的地址）</span></td>
  </tr>
  <tr>
    <td colspan="2" >
			<table >
				<tr>
					<td >活动简介</td>
					<td ><?php echo $this->_var['FCKeditor']; ?></td>
				</tr>
			</table>
    </td>
  </tr>

  <tr>
    <td colspan="2" align="center">
      <input type="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
      <input type="reset" value="<?php echo $this->_var['lang']['button_reset']; ?>" class="button" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['cut']['act_id']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>

<script language="JavaScript">
<!--
var display_yes = (Browser.isIE) ? 'block' : 'table-row-group';

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.isNumber('start_price', start_price_not_number, false);
    validator.isNumber('end_price', end_price_not_number, false);

    if (document.forms['theForm'].elements['no_top'].checked == false)
    {
      validator.gt('end_price', 'start_price', end_gt_start);
    }
    validator.isNumber('amplitude', amplitude_not_number, false);
    validator.isNumber('deposit', deposit_not_number, false);
    validator.islt('start_time', 'end_time', start_lt_end);
    return validator.passed();
}
function checked_no_top(o)
{
  if (o.checked)
  {
    o.form.elements['end_price'].value = '';
    o.form.elements['end_price'].disabled = true;
  }
  else
  {
    o.form.elements['end_price'].disabled = false;
  }
}
function searchGoods()
{
  var filter = new Object;
  filter.keyword  = document.forms['theForm'].elements['keyword'].value;

  Ajax.call('cut.php?is_ajax=1&act=search_goods', filter, searchGoodsResponse, 'GET', 'JSON');
}

function searchGoodsResponse(result)
{
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    return;
  }

  var frm = document.forms['theForm'];
  var sel = frm.elements['goods_id'];
  var sp = frm.elements['product_id'];

  if (result.error == 0)
  {
    /* 清除 options */
    sel.length = 0;
    sp.length = 0;

    /* 创建 options */
    var goods = result.content.goods;
    if (goods)
    {
      for (i = 0; i < goods.length; i++)
      {
          var opt = document.createElement("OPTION");
          opt.value = goods[i].goods_id;
          opt.text  = goods[i].goods_name;
          sel.options.add(opt);
      }
    }
    else
    {
      var opt = document.createElement("OPTION");
      opt.value = 0;
      opt.text  = search_is_null;
      sel.options.add(opt);
    }

    /* 创建 product options */
    var products = result.content.products;
    if (products)
    {
      //sp.style.display = display_yes;
      sp.style.display = 'none';
      for (i = 0; i < products.length; i++)
      {
        var p_opt = document.createElement("OPTION");
        p_opt.value = products[i].product_id;
        p_opt.text  = products[i].goods_attr_str;
        sp.options.add(p_opt);
      }
    }
    else
    {
      sp.style.display = 'none';

      var p_opt = document.createElement("OPTION");
      p_opt.value = 0;
      p_opt.text  = search_is_null;
      sp.options.add(p_opt);
    }
  }

  return;
}

function change_good_products()
{
  var filter = new Object;
  filter.goods_id = document.forms['theForm'].elements['goods_id'].value;

  Ajax.call('cut.php?is_ajax=1&act=search_products', filter, searchProductsResponse, 'GET', 'JSON');
}

function searchProductsResponse(result)
{
  var frm = document.forms['theForm'];
  var sp = frm.elements['product_id'];

  if (result.error == 0)
  {
    /* 清除 options */
    sp.length = 0;

    /* 创建 product options */
    var products = result.content.products;
    if (products.length)
    {
      sp.style.display = display_yes;

      for (i = 0; i < products.length; i++)
      {
        var p_opt = document.createElement("OPTION");
        p_opt.value = products[i].product_id;
        p_opt.text  = products[i].goods_attr_str;
        sp.options.add(p_opt);
      }
    }
    else
    {
      sp.style.display = 'none';

      var p_opt = document.createElement("OPTION");
      p_opt.value = 0;
      p_opt.text  = search_is_null;
      sp.options.add(p_opt);
    }
  }

  if (result.message.length > 0)
  {
    alert(result.message);
  }
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
