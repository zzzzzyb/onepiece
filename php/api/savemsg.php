<?php
	//$myData=$_POST['MyMsg'];
	$xmldoc = new DOMDocument();
	$xmldoc->load("../data/msg.xml");
	$itemdom = $xmldoc->getElementsByTagName("msgitem");//获取所有的item节点
	$firstitem = $itemdom->item(0);//第一个item（定位用的）
	$msgitemdom=$xmldoc->createElement("msgitem");
	$timedom=$xmldoc->createElement("time");
	$timedom->nodeValue=$_POST['MyTime'];;
	$contentdom=$xmldoc->createElement("content");
	$contentdom->nodeValue=$_POST['MyMsg'];
	$msgitemdom->appendChild($timedom);
	$msgitemdom->appendChild($contentdom);
	$xmldoc->documentElement->insertBefore($msgitemdom,$firstitem);
	$xmldoc->save("../data/msg.xml");
	echo "OK";
?>