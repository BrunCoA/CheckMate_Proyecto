# Instalacion de ansible y docker: 

Como root instalamos: 
>yum -y install epel-release
>
>yum -y install ansible

Como usuario admin de ansible (no root)
Vamos a utilizar como servidor de ejemplo "hostProyecto.local"
> ssh-keygen
> 
> ssh-copy-id hostProyecto.local
> 
> cat hostProyecto.local > /home/admin/hosts
> 
> ansible -i hosts all -m yum -a 'name=docker state=present'
