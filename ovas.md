# About OVA's

The OVA's that you will find through the resources of these material are VirtualBox Machines based on Debian 10 Minimal.

You will need the extension pack from Oracle Virtual Box downloads page.

## Users

The students don't need the passwords but in case you want to make any change or update here you have:

| user     | pass      |
| -------- | --------- |
| `root`   | `minimal` |
| `debian` | `debian`  |

## Network configuration

Most of the machines needs two network adapters:

1. One in `NAT mode`.
2. Other in `Host-only mode`. Usually virtual machine will have `192.168.22.22/24` so you have to configure your `vboxnet0` to `192.168.22.1/24` for example.

> In the last versions of VirtualBox you need to create a file `/etc/vbox/networks.conf` and include the allowed ranges to host-only networks. In this case your files needs at least a line like this:
>
> `* 192.168.0.0/16`

