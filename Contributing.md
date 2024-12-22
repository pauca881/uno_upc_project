### Trabajar de forma ordenada en Github con Pull Request

- Ves al proyecto principal (pauca881) y haz clic en el boton: Fork

- Ves a tu perfil de github y verás el proyecto uno_upc_project en tu listado de repositorios.

- Entra en el proyecto y dale al boton verde que pone [<> Code]

- Copia el texto que aparece justo debajo de HTTPS, deberia verse algo asi:

`http://github.com/tu_nombre_de_usuario/uno_upc_project.git`

- Abre tu editor de texto, por ejemplo: Visual Studio Code, y arrastra la carpeta al IDE donde vas a almacenar el respositorio.

- Busca la pestaña Terminal y abre una nueva terminal clicando en New Terminal.

- clona el repositorio remoto de tu perfil para tenerlo en local. Escribe

`git clone`, haz clic derecho del mouse y pulsa Enter.

Una vez descargado el repositorio, asegurate que estas dentro del repositorio local, 

`cd uno_upc_project` 

y bajate todas las ramas.

`git fetch --all`

La rama develop, actua como rama principal para desarrollar.

`git checkout develop`

Si la rama develop NO existe:

`git checkout -b develop`

Bajate los cambios de la rama develop, antes de iniciar una feature

`git pull origin develop`

Usaremos el nombre feature, para referenciarnos a la 'caracteristica' que queramos añadir al proyecto: feature/nombre_del_feature

`git checkout -b feature/nombre_del_feature`

Por ejemplo, para crear este manual, he escrito:

`git checkout -b feature/GitHelp`

Puedes ver todas las ramas con:

`git branch`

Ahora podrás hacer push sin miedo, ya que tus modificaciones se harán en la rama `feature/nombre_del_feature`

# # primera modificación en mi branch de feature

Sigue las instrucciones que aparecen arriba y crea una rama feature/ con el nombre que quieras.

Asegurate que estas dentro de la rama con `git branch`.

Ves al archivo README.md y agrega: 

-> # # Developes 
-> nombre: NickName_Github.

por ejemplo:
`# # Developes`
`Hector: Ktexaswalker`

comprueba el estado de tu rama feature/ con `git status`.

agrega los cambios con:

`git add .`

añade un commit acorde al trabajo realizado: 

`git commit -m "first commit Ktexaswalker"`

sube el repositorio local al remoto:

`git push origin nombre_rama`

por ejemplo: git push origin feature/GitHelp

# # Para fusionar ramas

Ir a la rama principal main

`git checkout main`

Actualizar la rama para que partas desde la ultima modificación

`git pull origin main`

Fusionar la rama feature/ con main

`git merge feature/nombre_del_feature`

En caso de que hayan conflictos, se tendrá que hacer de forma manual, seleccionando el codigo correcto y luego marcar los conflictos como resueltos

`git add archivos_resueltos`

Si quieres agregar todo:

`git add .`

Luego le pones el nombre para guardarlo

`git commit -m nombre_del_commit`

### main con la nueva feature

Comprueba que todo funciona con normalidad una vez fusionada la rama con tu feature. Si es así, ya se puede eliminar la feature.

`git branch -d feature/nombre_del_feature`

Elimina la rama del remoto:

`git push origin --delete feature/nombre_del_feature`


