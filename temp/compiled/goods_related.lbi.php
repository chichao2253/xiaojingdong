<?php if ($this->_var['related_goods']): ?>
<div class="aside-con related">
        <div class="aside-tit">
          <h2>相关商品</h2>
        </div>
        <div class="aside-list">
          <div class="clock">
            <ul>
              <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['releated_goods_data'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['releated_goods_data']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['releated_goods_data']['iteration']++;
?> 
              <li class="fore <?php if (($this->_foreach['releated_goods_data']['iteration'] <= 1)): ?>fore1<?php endif; ?>" >
                <div class="p-img"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['releated_goods_data']['goods_name']); ?>" href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><img width="100" height="100" alt="" src="<?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" /></a> 
                </div>
                <div class="rate"><a target="_blank" title="<?php echo htmlspecialchars($this->_var['releated_goods_data']['goods_name']); ?>" href="<?php echo $this->_var['releated_goods_data']['url']; ?>"><?php echo $this->_var['releated_goods_data']['short_name']; ?></a></div>
                <div class="p-price"><strong class="main-color"><?php if ($this->_var['releated_goods_data']['promote_price'] != ""): ?><?php echo $this->_var['releated_goods_data']['promote_price']; ?><?php else: ?><?php echo $this->_var['releated_goods_data']['shop_price']; ?><?php endif; ?></strong></div>
              </li>
              <?php if (! ($this->_foreach['releated_goods_data']['iteration'] == $this->_foreach['releated_goods_data']['total'])): ?>
              <div class="blank5"></div>
              <?php endif; ?> 
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
            </ul>
          </div>
        </div>
</div>
<?php endif; ?> 



