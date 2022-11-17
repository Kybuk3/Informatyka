Select * 
From Restaurant_table restaurantable
Cross Join Reservation restaurantreservation

Select DISTINCT restaurantable.id,restaurantable.name,restaurantable.number_of_guests,restaurantable.restaurant_id
From Restaurant_table restaurantable
Right Join reservation restaurantreservation
On restaurantable.id!=restaurantreservation.restaurant_table_id

Select *
From Restaurant_table restaurantable
Inner JOIN Reservation restaurantreservation
On restaurantable.id=restaurantreservation.restaurant_table_id
Order by restaurantable.restaurant_id /albo Where restaurantable.restaurant_id=cos-tam* /

Select
From Employee
Inner JOIN Employment restaurantemployment
On restaurantemployment.employee_id=Employee.id
Inner JOIN employee_position emppos 
On restaurantemployment.employee_position_id=emppos.id

Select *
From Employee
Left JOIN Employment restaurantemployment
On restaurantemployment.employee_id=Employee.id
Where restaurantemployment.employee_position_id is Null 

Select Employee.id
From Employee
Inner JOIN Employment restaurantemployment
On restaurantemployment.employee_id=Employee.id
Group by restaurantemployment.employee_id,Employee.id
Having COUNT(Employee.id)>1

Select *
From Employee
Cross Join Restaurant