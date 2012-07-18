# Caso de uso

1. Un **curso** puede ser impartido por uno o más de un **instructor**.
2. Un **instructor** puede dar varios **cursos**.
3. Un **curso** puede tener uno o más de un **alumno**.
4. Un **curso** puede tener varias **fechas**.
5. En un mismo día (**fecha**) puede haber uno o más de un **cursos**.
6. Un **curso** se puede dar en diferentes **lugares**.
7. El cupo de un **curso** puede ser diferente en diferentes **lugares**.
8. Un **curso** no debe superar su cupo.
9. Un **curso** puede tener varias **formas de pago**.
10. Un **curso** puede tener varias **etiquetas**.
11. Un **curso** solo tendrá una **categoría**.
12. En un mismo **lugar** pueden llevarse a cabo más de un **curso**

## Conclusiones

Deberemos validad que un **curso** tenga una **categoría**, que el cupo del **curso** no se sobrepase, que un **instructor** no tenga cursos en **fechas** encimadas.

## Tablas involucradas:

1. courses
2. instructors
3. students
4. places
5. categorys
6. tags
7. payForms
8. payForms_course
9. tags_course
10. carryOutDate_course
11. carryOutDateCourse_prices
12. carryOutDateCourse_instructors
13. carryOutDateCourse_students

### Campos involucrados

#### 1. Courses
1. Name
2. Category_id
2. Description
3. Target
4. Created at
5. Updated at
6. enabled

#### 2. Members [Instructors, Students]
1. Name
2. Lastname
3. Email
4. Phone
5. extra_info
6. enabled


#### 4. Places
1. coordinates
2. direction
3. number_events

#### 5. Categorys
1. name
2. description

#### 6. tags
1. name
2. number_tags

#### 7. payForms
1. name
2. description
3. help
4. filename
5. enabled

#### 8. payForms_carryOutDateCourse
1. payForm_id
2. carryOutDateCourse_id

#### 9. tags_course
1. tag_id
2. carryOutDateCourse_id

#### 10. carryOutDate_course
1. carryOutDateCourse_id
2. course_id

#### 11. carryOutDateCourse_prices
1. carryOutDateCourse_id
2. price

#### 12. carryOutDateCourse_instructors
1. carryOutDateCourse_id
2. instructor_id

#### 13. carryOutDateCourse_students
1. carryOutDateCourse_id
2. student_id