#include <bits/stdc++.h>

using namespace std;

const int N=1e6+7;
int a[N];
int main()
{
    for (int i=1;i<=7;i++)
    {
        cin >> a[i];
    }
    sort (a,a+8);


        cout << a[1] << " " << a[2] << " " << a[4];return 0;

}
