<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Class Posts_model extends Model
{
    function Posts_model() {
        parent::Model();
    }

    function get_recent_posts() {
        $sql = "
            SELECT p.*, u.username
              FROM posts p
              JOIN users u ON u.id = p.user_id
             LIMIT 20";

        $result = $this->db->query($sql);
        return $result;
    }
}

/* End of file posts_model.php */
/* Location: ./system/application/models/posts_model.php */