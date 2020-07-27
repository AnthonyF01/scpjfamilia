-- La diferencia en dias (duracion) entre fechas (fdenuncia, fformalizacion, faudiencia) será cero y contado para el promedio
-- si no son nulas [[ fdenuncia is not null and fformalizacion is not null and faudiencia is not null ]]

SELECT distinct mes, sum(a.duracion) as suma, avg(a.duracion) as promedio, count(*) as total 
from (
	select extract(month FROM d.fformalizacion) as mes, (case
		when d.fdenuncia is not NULL then
			case
				when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fdenuncia)
				else 0
			end
		when d.fdenuncia is NULL then 0 end
	) as duracion, d.fdenuncia, d.fformalizacion, d.faudiencia from denuncia d
	where tblmodulo_id=30 and d.fdenuncia is not null and d.fformalizacion is not null and d.faudiencia is not null and d.deleted_at is null
	AND extract(year FROM d.fformalizacion) = 2020 and month(d.fformalizacion)=6
) as a group by mes order by mes;
                        
-- --------------------------------

-- DRTotal
SELECT sum(a.duracion) as suma, avg(a.duracion) as promedio, count(*) as total 
from (
	select extract(month FROM d.fformalizacion) as mes, (case
		when d.fdenuncia is not NULL then
			case
				when d.faudiencia  is not NULL then DATEDIFF(d.faudiencia,d.fdenuncia)
				else 0
			end
		when d.fdenuncia is NULL then 0 end
	) as duracion, d.fdenuncia, d.fformalizacion, d.faudiencia from denuncia d
	where tblmodulo_id=30 and d.fdenuncia is not null and d.fformalizacion is not null and d.faudiencia is not null and d.deleted_at is null
	AND extract(year FROM d.fformalizacion) = 2020 and month(d.fformalizacion)=6
) as a;
                            
-- ----------------------------------
-- PNPTotal
SELECT sum(a.dias_pnp_den) as suma, avg(a.dias_pnp_den) as promedio, count(*) as total from (
	select (case
		when d.fdenuncia is not NULL then
			case
				when d.fformalizacion is not NULL then DATEDIFF(d.fformalizacion,d.fdenuncia)
				else 0
			end
		when d.fdenuncia is NULL then 0 end
	) as dias_pnp_den, d.fdenuncia, d.fformalizacion, d.faudiencia from denuncia d
	where tblmodulo_id=30 and d.fdenuncia is not null and d.fformalizacion is not null and d.faudiencia is not null and d.deleted_at is null
	AND extract(year FROM d.fformalizacion) = 2020 and month(d.fformalizacion)=6
) as a;
                            
-- -----------------------------
-- MVFTotal
SELECT sum(a.dias_modulo) as suma, avg(a.dias_modulo) as promedio, count(*) as total 
from (
	select (case
		when d.fformalizacion is not NULL then
			case
				when d.faudiencia is not NULL then DATEDIFF(d.faudiencia,d.fformalizacion)
				-- else DATEDIFF(now(),d.fformalizacion)
				else 0
			end
		when d.fformalizacion is NULL then 0 end
	) as dias_modulo, d.fdenuncia, d.fformalizacion, d.faudiencia from denuncia d
	where tblmodulo_id=30 and d.fdenuncia is not null and d.fformalizacion is not null and d.faudiencia is not null and d.deleted_at is null
	AND extract(year FROM d.fformalizacion) = 2020 and month(d.fformalizacion)=6 
) as a;
                            
                            
                            