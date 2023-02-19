
.. include:: ../../../../Includes.txt

.. _listView.13354593:
.. role:: red

=========
List view
=========

The view ``Test`` contains the following configuration.

Title Bar
=========

::

   <ul>
     <li>###field1###</li>
     <li>###field4###</li>
   </ul>

Item Template
=============

::

   <ul>
     <li>###field1###</li>
     <li>###field4###</li>
   </ul>

Selected Fields
===============

.. _listView.13354593.13354593.222419149.tx_savlibrarymvcexample0_domain_model_table1.field1:

..  container:: row m-0 p-0

    .. container:: card px-0 h-100

        ..  rst-class:: card-header

            ..  rubric:: ``field1``

        .. container:: card-body

            :Label: String
            :Type: :ref:`String <savlibrarykickstarter:string>`

            :Configuration:

            ::

                - func = makeItemLink
                - orderLinkInTitle = 1
                - orderLinkInTitleSetup = :value:ascdesc


.. _listView.13354593.13354593.222419149.tx_savlibrarymvcexample0_domain_model_table1.field4:

..  container:: row m-0 p-0

    .. container:: card px-0 h-100

        ..  rst-class:: card-header

            ..  rubric:: ``field4``

        .. container:: card-body

            :Label: Date
            :Type: :ref:`Date <savlibrarykickstarter:date>`


