# Docksal with xip.io

## Expose Docksal to external world by binding 0.0.0.0 to vhost proxy.
```
echo 'DOCKSAL_VHOST_PROXY_IP="0.0.0.0"' >> ~/.docksal/docksal.env
```

## Restart Docksal's proxy server.
```
fin system reset
```

## Check change of proxy.
```
$ fin docker ps | grep proxy

33117651785d        docksal/vhost-proxy:1.1   "docker-entrypoint..."   2 minutes ago       Up 2 minutes        0.0.0.0:80->80/tcp, 0.0.0.0:443->443/tcp   docksal-vhost-proxy
```

## Find your computer local ip, make use of xip.io to share site with the world.
```
$ ifconfig | grep inet
inet 192.168.5.226  netmask 255.255.255.0  broadcast 192.168.5.255
```

## Expose site.
```
// Access your xip.io with ${virtual_host}.docksal.192.168.5.226.xip.io

huagang.docksal.192.168.5.226.xip.io
```