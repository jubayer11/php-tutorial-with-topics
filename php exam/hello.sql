select t.*, eau.name as author, eas.name as assignee
from tasks t left join
     employees eau
     on eau.id = t.author_id left join
     employees eas
     on eas.id = t.assignee_id;