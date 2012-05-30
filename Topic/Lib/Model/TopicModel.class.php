<?php
class TopicModel extends Model{
	private $db = M();
	
	public function GetHome(){
		$sql = "SELECT topic.title, topic.content, topic.publishData, tag.name 
				FROM topic, tag, topic_tag_relation 
				WHERE topic.id = topic_tag_relation.topicId 
				AND topic_tag_relation.tagId = tag.id 
				LIMIT 10 
				ORDER BY topic.publishData ";
		$data = $db->query($sql);
		return $data;
	}
	
	public function GetOneTopic($Tid){
		return $data;
	}
}
?>