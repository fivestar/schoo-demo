<?php

class UpdateSqlSample
{
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function suspendUsers(array $userIds)
    {
        if (count($userIds) < 1) {
            return;
        }

        $sql = "UPDATE user SET status = :status WHERE id IN (:userIds)";
        $params = [
            'userIds' => $userIds,
            'status'  => User::STATUS_SUSPENDED,
        ];

        $this->db->execute($sql, $params);
    }
}
