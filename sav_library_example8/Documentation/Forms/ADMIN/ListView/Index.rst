
.. include:: ../../../Includes.txt

.. _listView.121294234:
.. role:: red

=========
List view
=========

The view ``ADMIN_List`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li>###fe_users.name###</li>
     <li>###email###</li>
     <li>###telephone###</li>
     <li>###usergroup###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li>###name###</li>
     <li>###email###</li>
     <li>###telephone###</li>
     <li>###usergroup###</li>
   </ul>

Selected Fields
===============

.. _listView.121294234.105916969.222419149.fe_users.name:

**Field**: ``name``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

**Configuration:**

::

  - func = makeItemLink
  - orderlinkintitle = 1
  - orderlinkintitlesetup = :link:ascdesc


.. _listView.121294234.105916969.222419149.fe_users.email:

**Field**: ``email``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

.. _listView.121294234.105916969.222419149.fe_users.telephone:

**Field**: ``telephone``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`

.. _listView.121294234.105916969.222419149.fe_users.usergroup:

**Field**: ``usergroup``

**Type:** :ref:`ShowOnly <savlibrarykickstarter:showOnly>`


