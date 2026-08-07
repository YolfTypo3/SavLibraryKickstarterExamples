.. include:: ../../../../Includes.txt

.. _listView.48499416:
.. role:: red

=========
List view
=========

The view ``USER_List`` contains the following configuration.


Item Template
=============

::

   <ul>
     <li>###image###</li>
   </ul>

Selected Fields
===============

.. _listView.48499416.247582226.217895432.fe_users.image:

.. card::
   :class: mb-md-2

  :Field: image

  :Type: :ref:`ShowOnly <yolftypo3/sav-library-kickstarter:showOnly>`

  :Configuration:

  ::

    - func = makeItemLink
    - edit = 1
    - width = 50px
    - height = auto