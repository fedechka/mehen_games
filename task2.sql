-- В зависимости от СУБД синтаксис может немного отличаться, но в целом - так
SELECT dep_id,
       SUM(CASE WHEN gender=1 THEN 1 ELSE 0 END) AS men,
       SUM(CASE WHEN gender=2 THEN 1 ELSE 0 END) AS women
FROM users
GROUP BY dep_id;