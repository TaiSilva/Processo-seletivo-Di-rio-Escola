
A)
/* Supondo que o ID de Lucas é 1 e ID de Pablo é 1 e que a coluna Parentesco seja um VARCHAR*/
BEGIN;
INSERT INTO parentesco VALUES (1,1,"Pai");
END

B)
/* Supondo que o ID de Brenda seja 2 */
BEGIN;
INSERT INTO parentesco VALUES (2,1,"Mãe");
END;

2) /*Foi utilizado na coluna o nome como responsavel pois no exemplo está IdResonsavel acho que foi erro de corretor*/

SELECT aluno.nome AS aluno, responsavel.nome AS responsavel, parentesco.parentesco FROM parentesco
INNER JOIN aluno ON 
aluno.id = parentesco.idAluno
INNER JOIN responsavel ON
responsavel.id = parentesco.idResponsavel
LIMIT 2;

Bônus)
SELECT * FROM parentesco
INNER JOIN aluno ON 
aluno.id = parentesco.idAluno
INNER JOIN responsavel ON
responsavel.id = parentesco.idResponsavel
GROUP BY aluno.id