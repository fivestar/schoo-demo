<?php

class UpdateSqlSample
{
    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function suspendUsers(array $userIds)
    {
        foreach ($userIds as $userId) {
            // status 1: active, 2: suspended
            $sql = "UPDATE user SET status = 2 WHERE id = :userId";
            $params = [
                'userId' => $userId,
            ];

            $this->db->execute($sql, $params);
        }
    }
}
