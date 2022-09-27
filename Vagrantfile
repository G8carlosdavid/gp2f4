Vagrant.configure("2") do |config|
  config.vm.box = "debian/bullseye64"
  config.vm.hostname = "grup08.fjeclot08.net"
  config.vm.provider "virtualbox" do |v|
    # v.gui = true
    v.name = "grup08"
    v.memory = 2048
    v.cpus = 2
    v.customize ['modifyvm', :id, '--clipboard', 'bidirectional']     
    config.vm.network "public_network"
    config.vm.synced_folder "/home/davogidi/Documents/ASIX/UF1_projecte/m08uf1/gp2f4/codi", "/var/www/html"
end

  config.vm.network "forwarded_port", guest: 80, host: 8000
  config.vm.network "forwarded_port", guest: 443, host: 8443
  
  config.vm.provision "shell", inline: <<-SHELL
    sudo apt-get update -y
    sudo apt-get upgrade -y
    sudo apt-get install -y net-tools
    sudo apt-get install -y apache2 apache2-doc
    sudo apt-get install -y libapache2-mod-php
    sudo apt-get install -y php7.4
    sudo apt-get install -y mariadb-server mariadb-client
    sudo apt-get install -y php7.4-mysql
    sudo apt-get install -y composer
  
  SHELL

end
