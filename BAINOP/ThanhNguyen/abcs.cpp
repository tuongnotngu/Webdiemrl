#include<bits/stdc++.h>

using namespace std;
int a[100];
int main()
{
    if (fopen("abcs.inp", "r" ))
    {
        freopen("abcs.inp" , "r" , stdin);
        freopen("abcs.out" , "w" , stdout);
    }
    for(int i=1 ; i<=7 ; i++) cin>>a[i];
    sort(a+1 , a+8);
    cout<<a[1]<<" " <<a[2]<< " " << a[7]-a[1]-a[2];
}
