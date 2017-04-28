-- does it work to comment things out like that? 
/*CREATE DATABASE if not exists inventory;

-- this allows you to select tables by just their names, rather than things like
-- inventory.assembling_equipment.  the second usage still works, but sometimes 
-- it's fun to save some keystrokes.
use inventory; 

CREATE TABLE assembling_equipment(
	Equipment varchar(255),
	Quantity int
	
);

CREATE TABLE test_equipment(
	Brand varchar(255),
	Equipment varchar(255),
	Location varchar(255)
	
);

CREATE TABLE circuit_components(
	ComponentType varchar(255),
	Quantity int,
	Location varchar (255)
);
*/
CREATE TABLE equipment_manuals(
	brand varchar(255),
	title varchar(255),
	classification varchar(255),
	copyrightyear int,
	location varchar(255),
	id serial
);

insert into equipment_manuals (brand , title , classification , copyrightyear) values ('Adobe' , 'Photoshop 5.0 Limeted Edition' , 'Software CD' , 1998 );
insert into equipment_manuals (brand , title , classification) values ('Agilent Technologies' , 'Agilent Handheld Digital Multimeter and Osciloscope Accessories' , 'Reference Manual');
