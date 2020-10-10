# Change IP using Ansible

Note: This playbook works on Debian Target only

## How To Use
Add needed hosts to `hosts` file under `[target]` section:

```ini
[target]
server-01-b address=192.168.10.1 gateway=192.168.10.100 netmask=255.255.255.0
```

Run the command:
```shell
ansible-playbook -i hosts change-ip.yaml
```
playbook will use `templates/debian-template.j2` template file to generate debian interface config.