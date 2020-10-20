SELECT medicine.medicine_id as id, medicine.name as name,	medicine.cost as cost, sum(inventory.quantity) as quantity
FROM medicine, inventory
WHERE medicine.medicine_id = inventory.medicine_id
GROUP BY medicine.medicine_id, medicine.name, medicine.cost;